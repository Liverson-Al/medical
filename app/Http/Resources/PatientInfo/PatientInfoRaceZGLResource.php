<?php

namespace App\Http\Resources\PatientInfo;

use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Http\Resources\Echocardiography\EchocardiographyResource;
use App\Http\Resources\MSQCAngiographyAorta\MSQCAngiographyAortaResource;
use App\Http\Resources\PatientCollection;
use App\Http\Resources\PatientHistory\PatientHistoryResource;
use App\Models\Clinic;
use App\Models\PatientInfo;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientInfoRaceZGLResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "patientID"=> "1",
            "employee_id"=> 1,
            "personal_data" => [

                'first_name'      => "Иван",
                'second_name'     => "Щеглов",
                'patronymic'      => "Павлович",
                'birthday'        => "1995-10-11",
                'sex'             => 1,
                'region'          => "Северо-западный регион",
                'clinic'          => "СПБГУ",
                'race'            => 'evr',
                'version'         => 0,
         ],
            "anthropometric_data" => [
                'height'=>180,
                'weight'=>86,
                'body_mass_index'=>2,
                'body_surface_area'=>60,
                'body_type'=>2,
                'connective_tissue_dysplasia'=>1,
                'connective_tissue_dysplasia_Marfan'=>1,
                'connective_tissue_dysplasia_EhlersDanlos'=>0,
                'connective_tissue_dysplasia_LoeysDitz'=>0,
                'connective_tissue_dysplasia_Terner'=>0,
                'connective_tissue_dysplasia_Noonan'=>1,
                'version'=>0,
                'date'=>"2022-11-11",
            ],
            "clinical_data" => [
                'main_diag'=>"ДИАГНОЗ",
                'aortic_dissection'=>0,
                'intramural_hematoma'=>0,
                'aortic_rupture'=>0,
                'patient_state'=>"ИНФОРМАЦИЯ",
                'pain_beh_stern'=>1,
                'interscap_reg_pain'=>"ИНФОРМАЦИЯ",
                'conscious_loss'=>"ИНФОРМАЦИЯ",
                'low_extrem_ischemia'=>"ИНФОРМАЦИЯ",
                'empoyeeID'=>1,
                'version'=>0,
                'date'=>"2022-11-11",
            ],
            "concom_desease" => [
                'acuteMyocardilInfarctionNum'=>2,
                'currentMyocardilInfarction'=>1,
                'diabetes'=>1,
                'diabetesType'=>"ИНФОРМАЦИЯ",
                'cerebrovascularDisease'=>0,
                'BCAStenosis'=>0,
                'translschAttack'=>0,
                'ACVA'=>0,
                'chronicLungDisease'=>0,
                'prevInfectiousDisease'=>0,
                'rhythmConcluctionDisturbances'=>0,
                'thyroidDisease'=>0,
                'acuteRenalFailure'=>0,
                'chronicRenalFailure'=>0,
                'oncology'=>0,
                'hematologicalDisease'=>0,
                'pulmonaryEmbolism'=>0,
                'chestWallInjury'=>1,
                'aorticValve'=>"ИНФОРМАЦИЯ",
                'acquiredAVDisease'=>0,
                'AVDegenerativeLesions'=>0,
                'AVInfectiousLesions'=>0,
                'AVWTraumaticLesionsb'=>0,
                'version'=>0,
                'date'=>"2022-11-11",
            ],
            "anamnesis" => [
                'disHeartBloodVesselsFirstLineRelatives'=>1,
                'relativesConnTissDysplasia'=>0,
                'heartSurgeriesPr'=>1,
                'heartSurgeriesType'=>"ИНФОРМАЦИЯ",
                'geneticAnalysisPr'=>1,
                'geneticAnalysisRes'=>"ИНФОРМАЦИЯ",
                'smokingExperience'=>0,
                'alkoConsumptionExperince'=>10,
                'drugConsumptionExperince'=>0,
                'occupationalHazards'=>"ИНФОРМАЦИЯ",
                'sports'=>"ИНФОРМАЦИЯ",
                'diseaseKnowledge'=>"2022-11-11",
                'employed'=>1,
                'blodThinDrugs'=>0,
                'disaggregants'=>0,
                'version'=>0,
                'date'=>"2022-11-11",
                ],
            "echocardiogram" => [
                'LVEF'=>"ИНФОРМАЦИЯ",
                'LVEDV'=>"ИНФОРМАЦИЯ",
                'LVESV'=>"ИНФОРМАЦИЯ",
                'ascAorticD'=>"ИНФОРМАЦИЯ",
                'valsalvaSinusesD'=>"ИНФОРМАЦИЯ",
                'AVLeafletN'=>"ИНФОРМАЦИЯ",
                'AVAnnuFibrD'=>"ИНФОРМАЦИЯ",
                'peakSpeedAV'=>"ИНФОРМАЦИЯ",
                'AVPressureGradientMax'=>"ИНФОРМАЦИЯ",
                'AVPressureGradientMean'=>"ИНФОРМАЦИЯ",
                'aorticRegurgitationDegree'=>0,
                'pulmArterySysBP'=>"ИНФОРМАЦИЯ",
                'mitralInsuffStenPrD'=>"ИНФОРМАЦИЯ",
                'tricuspi'=>"ИНФОРМАЦИЯ",
                'trialSeptalDefectPr'=>"ИНФОРМАЦИЯ",
                'version'=>0,
                'date'=>"2022-11-11",
            ],
            "MCT" => [
                'AV_annulus_fibrosis'=>5,
                'sinuses_valsalva'=>8,
                'sinotubular_junction'=>4,
                'asc_aorta_pulm_art_bif'=>3,
                'asc_aorta_before_BCS'=>2,
                'aortic_arch_before_CCA'=>4,
                'aortic_arch_before_LSA'=>3,
                'aorticlsthmus'=>8,
                'desc_aorta_middle_part'=>12,
                'abdominal_aorta'=>2,
                'version'=>0,
                'date'=>"2022-11-11",
            ]
         ];
    }

}
