<?php

namespace App\Http\Resources\ClinicalData;

use Illuminate\Http\Resources\Json\JsonResource;

class ClinicalDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $clinicaldata = $this->resource;
        return [

            //'visit_id'=>$clinicaldata->visit_id,
            'main_diag'=>$clinicaldata->main_diag,
            'aortic_dissection'=>$clinicaldata->Aortic_dissection,
            'intramural_hematoma'=>$clinicaldata->intramural_hematoma,
            'aortic_rupture'=>$clinicaldata->aortic_rupture,
            'patient_state'=>$clinicaldata->patient_state,
            'pain_beh_stern'=>$clinicaldata->pain_beh_stern,
            'interscap_reg_pain'=>$clinicaldata->interscap_reg_pain,
            'conscious_loss'=>$clinicaldata->conscious_loss,
            'low_extrem_ischemia'=>$clinicaldata->low_extrem_ischemia,
            'empoyeeID'=>$clinicaldata->user_id,
            //'version'=>$clinicaldata->version,
            'version'=>0,
            //'date'=>$clinicaldata->date,
            'date'=>0,

        ];
    }
}
