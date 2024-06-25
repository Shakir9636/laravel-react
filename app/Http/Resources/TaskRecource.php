<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class TaskRecource extends JsonResource
{

    public static $wrap = false;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'created_at'=>(new Carbon($this->created_at))->format('Y-m-d'),
            'dua_date'=>(new Carbon($this->dua_date))->format('Y-m-d'),
            'status'=>$this->status,
            'priority'=>$this->priority,
            'image_path' => $this->image_path ? Storage::url($this->image_path) : '',
            'project_id'=>$this->project_id,
            'assigned_user_id'=>$this->assigned_user_id,
            'project'=>New ProjectRecource($this->project),
            'assignedUser'=> $this->assignedUser ? New UserRecource($this->assignedUser) : null,
            'createdBy'=> New UserRecource($this->createdBy),
            'updatedBy'=>New UserRecource($this->updatedBy),
        ];
    }
}
