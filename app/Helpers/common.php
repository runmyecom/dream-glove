<?php

use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

function getTopNavCat(){
    $result = DB::table('categories')->get();
    $arr=[];
    foreach($result as $row){
        $arr[$row->id]['city']=$row->name;
        $arr[$row->id]['parent_id']=$row->parent_id;
    }
    $str=buildTreeView($arr,0);
    return $str;
}

$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel= -1){
    global $html;
    foreach($arr as $id=>$data){
        if($parent==$data['parent_id']){
            if($level>$prelevel){
                if($html==''){
					$html.='<div class="relative">
                    <div
                        class="bg-white shadow rounded-md p-3 min-w-[220px] top-1 w-full absolute z-10"
                        x-show="apparelMenu"
                        x-cloak
                        @click.away="apparelMenu = false" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95">
                        <ul
                            class="[&>li]:text-gray-900 [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-gray-50 active:[&>li]:bg-gray-50 active:[&>li]:scale-[0.99]">';
				}else{
					$html.='<div x-data="{ apparelMenu: false }">
                    <button
                        class="text-zinc-800 rounded px-3 py-1 text-sm"
                        x-on:click="apparelMenu = ! apparelMenu"
                    >';
				}
            }
            if($level==$prelevel){
				$html.='</li>';
			}
            $html.='<li><a href="#">'.$data['city'].'<span class="caret"></span></a>';
            if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			buildTreeView($arr,$id,$level,$prelevel);
			$level--;
        }
    }
    if($level==$prelevel){
		$html.='</button></li></ul></div></div></div>';
	}
	return $html;
}

?>
