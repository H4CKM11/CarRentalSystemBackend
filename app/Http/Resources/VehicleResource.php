<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $response = [];

        switch($request->query('include'))
        {
            case 'imgURL':
                $response['imgURL'] = $this->imgURL;
                break;
            case 'vehicleInformation':
                return[
                    'make' => $this->make,
                    'model' => $this->model,
                    'rate' => $this->rate,
                    'imgURL' => $this->imgURL,
                ];

            default:
            break;
        }


        return $response;
    }
}
