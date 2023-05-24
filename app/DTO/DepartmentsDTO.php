<?php


namespace App\DTO;


class DepartmentsDTO
{
    public string $name;
    public string $savedBy;

    public function mapData(array $data)
    {
        return [
            $this->name => $data['name'],
            $this->savedBy => $data['savedBy']
        ];

    }
}
