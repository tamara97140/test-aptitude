<?php

namespace App\Controller;

use App\Document\Depots;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DepotController extends AbstractController
{
    private DocumentManager $dm;
    private LoggerInterface $logger;
    public function __construct(DocumentManager $dm, LoggerInterface $logger)
    {
        $this->dm = $dm;
        $this->logger = $logger;
    }

    /**
     * @Route("/depots/{reference}/{dateParam}", name="depots_filtered", methods={"POST"})
     */
    public function index(Request $request): JsonResponse
    {
        try {
            // Retrieve JSON payload
            $data = json_decode($request->getContent(), true);

            // Extract parameters and handle 'null' values
            $reference = $data['reference'] ?? null;
            $dateParam = $data['date'] ?? null;

            // Retrieve depot documents from MongoDB
            $depotRepository = $this->dm->getRepository(Depots::class);

            // Create a query with filters for reference and/or date
            $query = [];
            if ($reference) {
                $query['REFERENCE'] = $reference;
            }
            if ($dateParam) {
                $date = str_replace('-', '/', $dateParam); // Convert d-m-Y to d/m/Y
                $query['date_depot'] = $date;
            }

            $depots = $depotRepository->findBy($query);

            // Map depot documents to response data
            $responseContent = array_map(function($depot) {
                return [
                    'reference' => $depot->getRef(),
                    'date' => $depot->getDate(), // Format date for JSON response
                    'demandeur' => $depot->getDemandeur(),
                    'surface' => intval($depot->getSurface()),
                    'nature' => $depot->getNature(),
                    'adresse' => $depot->getAdresse(),
                    'ref_cad' => $depot->getRefCadastrales(),
                ];
            }, $depots);

            return $this->json([
                'depot' => $responseContent,
            ]);
        } catch (\Exception $e) {
            // Log and handle exceptions
            $this->logger->error('Error fetching depots: ' . $e->getMessage());
            return $this->json(['error' => 'Invalid date format or other error'], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}
