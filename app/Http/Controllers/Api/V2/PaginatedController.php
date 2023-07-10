<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use App\Models\User;
use App\Models\MultipleChoice;

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
}
