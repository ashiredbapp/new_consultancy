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

    public static function functionalArea($value)
    {
        $functionalArea[0]="Accounts / Finance / Tax / CS / Audit";
        $functionalArea[1]="Agent";
        $functionalArea[2]="Analytics & Business Intelligence";
        $functionalArea[3]="Architecture / Interior Design";
        $functionalArea[4]="Banking / Insurance";
        $functionalArea[5]="Beauty / Fitness / Spa Services";
        $functionalArea[6]="IT Software - Application Programming / Maintenance";
        $functionalArea[7]="HR";
    }

}
