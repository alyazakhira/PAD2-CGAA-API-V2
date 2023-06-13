<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourceWrapper extends JsonResource
{
    public $status;
    public $message;
    public $code;
    public $resource;

    public function __construct($status, $code, $message, $resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'success'   => $this->status,
            'code'      => $this->code,
            'message'   => $this->message,
            'data'      => $this->resource,
        ];
    }
}
