<?php
class Paginator{
    function __construct($obj){
        $this->obj = $obj;
    }
    function paginate($parPage){
        $perPage = $parPage;
        $obj = $this->obj;
        $pagination = [];
        $start = 0;
        $end = $perPage;
        $next = 0;
        $current;
        $previous;
        $next ;

        $last = count($obj) / $perPage;

        for($i = 0; $i < $last; $i++){
            // console.log(obj.slice(start,end))
            // $subArray = $obj.slice($start,$end);

            $subArray = array_slice($obj, $start, $end);
            
            $current = $i + 1;
            $next = ($i + 1) + 1;
            $previous = ($i + 1) - 1;
            $start = $start + $perPage;
            $end = $end + $perPage;

            // console.log('current = '+ current)
            // console.log('next = ' + next)
            // console.log('previous = ' + previous)

            $item = array(
                'data'=> $subArray,
                'page'=> array(
                    'current'=> $current,
                    'next'=> $next,
                    'previous'=> $previous,
                    'last'=> $last
                )
            );

            array_push($pagination, $item);

            // $pagination.push($item);
            
        }

        return $pagination;
    }
}
