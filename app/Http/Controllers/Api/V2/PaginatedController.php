<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use App\Models\User;
use App\Models\MultipleChoice;
use App\Models\Essay;
use App\Models\CaseStudy;

class PaginatedController extends Controller
{
    public function paginated_user($item_count){
        $user = User::where('is_admin', '==', false)->paginate($item_count);;
        return ResourceWrapper::make(true, 200, 'Paginated User Data', $user);
    }

    public function paginated_multiple_choice($item_count){
        $multipleChoice = MultipleChoice::paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Multiple Choice Data', $multipleChoice);
    }

    public function paginated_mp_pusat($item_count){
        $mpPusat = MultipleChoice::where('question_type', '=', 'pusat')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Multiple Choice Data - Pusat', $mpPusat);
    }

    public function paginated_mp_daerah($item_count){
        $mpDaerah = MultipleChoice::where('question_type', '=', 'daerah')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Multiple Choice Data - Daerah', $mpDaerah);
    }

    public function paginated_ey_pusat($item_count){
        $eyPusat = Essay::where('question_type', '=', 'pusat')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Essay Data - Pusat', $eyPusat);
    }

    public function paginated_ey_daerah($item_count){
        $eyDaerah = Essay::where('question_type', '=', 'daerah')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Essay Data - Daerah', $eyDaerah);
    }

    public function paginated_cs_pusat($item_count){
        $csPusat = CaseStudy::where('question_type', '=', 'pusat')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Case Study Data - Pusat', $csPusat);
    }

    public function paginated_cs_daerah($item_count){
        $csDaerah = CaseStudy::where('question_type', '=', 'daerah')->paginate($item_count);
        return ResourceWrapper::make(true, 200, 'Paginated Case Study Data - Daerah', $csDaerah);
    }
}
