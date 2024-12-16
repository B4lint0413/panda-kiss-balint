<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class PandaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $now = Carbon::now();
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'sex' => $this->sex,
            'birth' => $this->birth,
            'age' => $now->diff($this->birth)->y
        ];
    }
}
