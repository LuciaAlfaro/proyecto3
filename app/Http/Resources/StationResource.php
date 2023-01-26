<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StationResource extends JsonResource
{
    const KEYS = array(
        'id' => 'number',
        'name' => 'name',
        'direction' => 'address',
        'available_bikes' => 'available_bikes'
        );
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $attributes = parent::toArray($request);
        $id = $attributes['number'];
        // return parent::toArray($request);
        return [
            'id' => $id,
            'attributes' => self::getAttributes($attributes)
        ];
    }

    public static function getAttributes($data)
    {
        $attributes = array();

        foreach(self::KEYS as $key => $field) {
            $attributes[$key] = self::getFirstElementRecursive($data[$field]);
        }

        return $attributes;
    }

    public static function getFirstElementRecursive($dataArray) {
        return is_array($dataArray) ? self::getFirstElementRecursive($dataArray[0]) : $dataArray;
    }
}
