<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Utility
{
    public static function datatable($tableId, $srcUrl, $actionInput='')
    {
        echo view('utilities.datatable')->with([
            'srcUrl'      => $srcUrl,
            'tableId'     => $tableId,
            'actionInput' => $actionInput
        ]);
    }

    public static function downloadUrl($src, $query, $queryParameter)
    {

        return $src.','.encrypt($query).','.str_replace(',', '||', json_encode($queryParameter));
    }

    public static function downloadLink($downloadId)
    {
        echo view('utilities.download', ['downloadId' => $downloadId ] );
    }

    public static function getInfoIcon($id)
    {
        return "<a class='tooltips' data-original-title='information' href='javascript:;' onclick=\"loadModal('$id');\"><i class='fa fa-info'></i></a>";
    }

    public static function get360Icon($url)
    {
        return "<a class='tooltips' data-original-title='360 View' target='_blank' href='$url'><i class='fa fa-tachometer'></i></a>";
    }

    public static function getEditIcon($url)
    {
        return '<a class="tooltips" data-original-title="Edit" href="'.$url.'"><i class="fa fa-edit edit"></i></a>';
    }

    public static function getPasswordIcon($pass)
    {
        return '<a class="tooltips" data-original-title="Click To Copy Password" onClick="copyToClipboard(\''.$pass.'\')"><i class=" fa fa-copy"></i></a>';
    }
    public static function getDeleteIcon($id)
    {
        return "<a class='tooltips' data-original-title='Delete' href='javascript:;' onclick=\"deleteMe('$id');\"><i class='fa font-red fa-trash-o'></i></a>";
    }

    public static function getPasswordResetIcon($url)
    {
        return "<a class='tooltips' data-original-title='Password Reset' onclick=\"resetPassword( '$url' );\" ><i class='fa fa-recycle'></i></a>";
    }

    public static function getOtherUserLoginIcon($url)
    {
        return '<a class="tooltips" data-original-title="Other User Login" href="'.$url.'" ><i class="fa fa-eye-slash"></i></a>';
    }
    public static function getpdfIcon($url)
    {
        return "<a class='tooltips' data-original-title='PDF' target='_blank' href='$url'><i class='fa fa-file-pdf-o'></i></a>";
    }

    public static function getDependencyIcon($url)
    {
        return '<a class="tooltips" data-original-title="Dependency" href="'.$url.'"><i class="fa fa-openid"></i></a>';
    }

    public static function getScrumIcon($url)
    {
        return '<a class="tooltips" data-original-title="Daily Scrum" href="'.$url.'"><i class="fa fa-strikethrough"></i></a>';
    }

    public static function getRetrospectiveIcon($url)
    {
        return '<a class="tooltips" data-original-title="Retrospective" href="'.$url.'"><i class="fa fa-registered"></i></a>';
    }

    public static function getMomIcon($url)
    {
        return '<a class="tooltips" data-original-title="MoM" href="'.$url.'"><i class="fa fa-envelope"></i></a>';
    }

    public static function getTreeIcon($url)
    {
        return "<a class='tooltips' data-original-title='Tree view' href='javascript:;' onclick=\"loadTree('$url');\"><i class='fa fa-tree'></i></a>";
    }

    public static function getActualIcon($id)
    {
        return "<a class='tooltips' data-original-title='Actual' href='javascript:;' onclick=\"showActualForm('$id');\"><i class='fa fa-font'></i></a>";
    }

    public static function getHistoryIcon($url)
    {
        return "<a class='tooltips' data-original-title='History' href='javascript:;' onclick=\"loadhistory('$url');\"><i class='fa fa-history'></i></a>";
    }
    public static function getProductionIcon($url)
    {
        return '<a class="tooltips" data-original-title="Production Move" href="'.$url.'"><i class="fa fa-paragraph"></i></a>';
    }

    public static function getDocIcon($url, $count=0)
    {
        return '<a class="tooltips" data-original-title="File Upload" href="'.$url.'"><i class="fa fa-file"></i>'.(($count>0)?'<sup><span class="font-green-jungle sbold">'.$count.'</span></sup>':'').'</a>';
    }

    public static function getActiveIcon($url)
    {
        return '<a class="tooltips" data-original-title="Activate Sprint" href="'.$url.'"><i class="fa fa-font"></i></a>';
    }

    public static function getRegisterIcon($url)
    {
        return '<a class="tooltips" data-original-title="Register" href="'.$url.'"><span class="font-green-jungle bold">R</span></a>';
    }

    public static function getCloseIcon($url)
    {
        return "<a class='tooltips' data-original-title='Close Sprint' href='".$url."'><span class='font-red-jungle'>C</span></a>";
    }
    public static function timesheetIcon($url,$timesheet)
    {
        return "<a class='tooltips' data-original-title='Timesheet' href='".$url."'>".(($timesheet === true)?'<span class="font-green-jungle bold">T</span>':'<span class="font-red-soft bold">T</span>')."</a>";
    }
    public static function getCloseEpicIcon($url)
    {
        return '<a class="tooltips" data-original-title="Close Epic" href="'.$url.'"><span class="font-red-jungle bold">C</span></a>';
    }

    public static function  getHoldEpicIcon($url)
    {
        return '<a class="tooltips" data-original-title="Hold Epic" href="'.$url.'"><span class="font-red-jungle bold">H</span></a>';
    }

    public static function getActiveEpicIcon($url)
    {
        return '<a class="tooltips" data-original-title="Activate Epic" href="'.$url.'"><i class="fa fa-font"></i></a>';
    }

    public static function getBookIcon()
    {
        return '<a class="tooltips" data-original-title="Click to view Document" ><i class="fa fa-book"></i></a>';
    }

    public static function getParticipantsIcon($url)
    {
        return '<a class="tooltips" data-original-title="Participants" href="'.$url.'"><i class="fa fa-users"></i></a>';
    }

    public static function getFeedbackIcon($id)
    {
        return "<a class='tooltips' data-original-title='Give Feedback' href='javascript:;' onclick=\"feedback('$id');\"><i class='fa fa fa-thumbs-up'></i></a>";
    }

    public static function getAttendeesIcon($url)
    {
        return '<a class="tooltips" data-original-title="Give Attendence" href="'.$url.'" ><i class="fa fa-font"></i></a>';
    }

    public static function getBacklogIcon($url)
    {
        return '<a class="tooltips" data-original-title="Task Backlog" href="'.$url.'"><i class="fa fa-bitcoin"></i></a>';
    }
    public static function getConversionIcon($url)
    {
        return "<a class='tooltips' data-original-title='Convert to task' href='javascript:;' onclick=\"actualUpdate('$url');\"><i class='fa fa-exchange'></i></a>";
    }
    public static function getQuestionpaperIcon($url)
    {
        return "<a class='tooltips' data-original-title='Click To Open QuestionPaper' target='_blank' href='$url'><i class='fa fa-file-text-o'></i></a>";
    }
    public static function getCommentIcon($url)
    {
        return "<a class='tooltips' data-original-title='Comments' href='javascript:;' onclick=\"comment('$url');\"><i class='fa fa-comments-o'></i></a>";
    }
    public static function getReviewIcon($url)
    {
        return '<a class="tooltips" data-original-title="We appreciate your feedback!" href="'.$url.'"><i class="fa fa-smile-o"></i></a>';
    }

    public static function getGroupusersIcon($url)
    {
        return "<a class='tooltips' data-original-title='Click To Open Users' target='_blank' href='$url'><i class='fa fa-users'></i></a>";
    }
    public static function getBugIcon($id)
    {
        return "<a class='tooltips' data-original-title='Give Bugcount' href='javascript:;' onclick=\"bugcount('$id');\"><i  class='fa fa-bug'></i></a>";
    }
    public static function getBurndownIcon($url)
    {
        return "<a class='tooltips' data-original-title='Burndown Chart' href='".$url."'><i class='fa fa-line-chart'></i></a>";
    }
    public static function getVelocityIcon($url)
    {
        return '<a class="tooltips" data-original-title="Velocity Chart" href="'.$url.'"><i class="fa fa-vimeo-square"></i></a>';
    }
    public static function getGroupQuestionpaperIcon($url)
    {
        return "<a class='tooltips' data-original-title='Click To Open QuestionPaper' target='_blank' href='$url'><i class='fa fa-file-text-o'></i></a>";
    }

    public static function getManagementIcon($url)
    {
        return '<a class="tooltips" data-original-title="Management" href="'.$url.'"><i class="fa fa-black-tie"></i></a>';
    }

    public static function dateFormat($date)
    {
        return $date?Carbon::parse($date)->format('d-m-Y'):null;
    }

    public static function shortText($text, $length=12)
    {
        if(strlen($text) <= $length)
            return $text;
        $text = str_replace(' ', '&nbsp;', $text);
        $return = '<span class="popovers"
            data-content="'.htmlentities($text).'"
            data-trigger="hover"
            data-container="body" data-html="true"
            data-placement="right" style="cursor:pointer">';
        $text = str_replace('&nbsp;', ' ', $text);
        if( strlen($text) > $length)
            $return .= substr($text, 0, $length).'...<span class="hide">'.$text.'</span>';
        else
            $return .= $text;

        $return .= '</span>';
        return $return;
    }

    public static function getColor($roadBlocks)
    {
        $ccount = $roadBlocks->where('severity', 'Critical')->count();
        $mcount = $roadBlocks->where('severity', 'Moderate')->count();
        $lcount = $roadBlocks->where('severity', 'Low')->count();

        if( $ccount >= 1 || $mcount >= 2 || $lcount >= 3)
            return 'danger';
        else if( $ccount == 0 && $mcount >= 1 || $lcount >= 2)
            return 'warning';
        else if( $ccount == 0 && $mcount == 0 && $lcount >= 1)
            return 'info';
        else
            return 'success';
    }

    public static function quoteForTheDay($id)
    {
        $quote[1]['quote']   = "If today were the last day of my life, would I want to do what i'm about to do today?";
        $quote[1]['author']  = "- Steve Jobs";
        $quote[2]['quote']   = "It doesn’t make sense to hire smart people and then tell them what to do; we hire smart people so they can tell us what to do";
        $quote[2]['author']  = "- Steve Jobs";
        $quote[3]['quote']   = "Arise! Awake! and stop not until the goal is reached";
        $quote[3]['author']  = "- Swami Vivekananda";
        $quote[4]['quote']   = "You cannot believe in God until you believe in yourself";
        $quote[4]['author']  = "- Swami Vivekananda";
        $quote[5]['quote']   = "Be the change that you want to see in the world";
        $quote[5]['author']  = "- Mahatma Gandhi";
        $quote[6]['quote']   = "See the good in people and help them";
        $quote[6]['author']  = "- Mahatma Gandhi";
        $quote[7]['quote']   = "I choose a lazy person to do a hard job. Because a lazy person will find an easy way to do it";
        $quote[7]['author']  = "- Bill Gates";
        $quote[8]['quote']   = "Don’t compare yourself with anyone in this world…if you do so, you are insulting yourself";
        $quote[8]['author']  = "- Bill Gates";
        $quote[9]['quote']   = "The important thing is not to stop questioning. Curiosity has its own reason for existing";
        $quote[9]['author']  = "- Albert Einstein";
        $quote[10]['quote']  = "Anyone who has never made a mistake has never tried anything new";
        $quote[10]['author'] = "- Albert Einstein";
        return $quote[$id];
    }

    public static function convertDate($value)
    {
        return $value?Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d'):null;
    }

    public static function reverseDate($value)
    {
        return $value?Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y'):null;
    }
}
