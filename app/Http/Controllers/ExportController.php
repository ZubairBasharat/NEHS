<?php

namespace App\Http\Controllers;

use App\Exports\CAssignmentExport;
use App\Exports\CertificatesExport;
use App\Exports\CertificatesTypeExport;
use App\Exports\CourseCatExport;
use App\Exports\CoursesExport;
use App\Exports\CourseStat;
use App\Exports\DepartmentExport;
use App\Exports\FormPdf;
use App\Exports\ManagersExport;
use App\Exports\UsersExport;
use App\Exports\VideoCatExport;
use App\Models\CertificatesType;
use Illuminate\Http\Request;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
   public function Export_Record($type,$table){


       if($table == 'manager'){

           return Excel::download(new ManagersExport, 'Managers.'.$type);
       }
       if($table == 'courses'){

           return Excel::download(new CoursesExport, 'courses.'.$type);
       }
       if($table == 'course-cat'){

           return Excel::download(new CourseCatExport, 'course-cat.'.$type);
       }
       if($table == 'vid-cat'){

           return Excel::download(new VideoCatExport, 'vid-cat.'.$type);
       }
       if($table == 'course-stat'){

           return Excel::download(new CourseStat, 'course-stat.'.$type);
       }
       if($table == 'certificates'){

           return Excel::download(new CertificatesExport, 'certificates.'.$type);
       }
       if($table == 'certificates-type'){

           return Excel::download(new CertificatesTypeExport, 'certificates-type.'.$type);
       }
       if($table == 'department'){

           return Excel::download(new DepartmentExport, 'department.'.$type);
       }
       if($table == 'cassignm'){

           return Excel::download(new CAssignmentExport, 'cassignm.'.$type);
       }
       if($table == 'formpdf'){

           return Excel::download(new FormPdf($type), 'formpdf.pdf');
       }
       if($table == 'project')
       {
            return Excel::download(new ProjectsExport, 'projects.'.$type);
       }


   }
}
