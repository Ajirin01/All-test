<?php
    require_once(dirname(__FILE__).'/models/Property.php');
    require_once(dirname(__FILE__).'/array_pagination.php');
    $propertyModel = new Property();
    $properties = json_decode($propertyModel->all());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
        }

        li{
            display: inline
        }

        li a{
            padding: 10px
        }
    </style>
</head>
<body>
    
    <div>
        <div>
            <h1>Products Pagination Test</h1>

            <div id="el"></div>

            <ul id="pager">
            </ul>
        </div>
    </div>

    <?php
        $current = $_GET['page'];
        
        $obj = $properties;
        $paginator = new Paginator($obj);

        $pagination = $paginator->paginate(2);

        // echo json_encode($pagination);

        // pagination link min = 1
        if($current > 1){
            echo "<ul><li style='display: inline'><a href='?page=" . $pagination[$current-1]['page']['previous'] . "'onclick='goPage()'> Previous </a></li>";
        }

        for ($i = 0; $i < count($pagination); $i++) {
            if($current == ($i+1)){
                echo "<li style='background-color: red; width: 20px; display: inline'><a href='?page=" . ($i+1) . "'onclick='goPage()'>" . ($i+1) . "</a></li></ul>";
            }else{
                echo "<li style='width: 20px; display: inline'><a href='?page=" . ($i+1) . "'onclick='goPage()'>" . ($i+1) ."</a></li>";
            }
        }

        // pagination link max  = {pages}max
        if($current < $pagination[$current-1]['page']['last']){
            echo "<li style='display: inline'><a href='?page=" . $pagination[$current-1]['page']['next'] .  "'onclick='goPage()'> Next </a></li></ul>";

        }


        // paginaton data
        $current_page_data = $pagination[$current-1]['data'];

        for ($j = 0; $j < count($current_page_data); $j++) {
            echo "<br><li>" . $current_page_data[$j]->acf->title . "</li><br><br>";
        }
    ?>


    <script src="/array_pagination.js"></script>
    <!-- <script>
        var obj = []
        
        

        fetch('http://localhost/premejoy-wp/wp-json/wc/store/products')
        .then((response) => response.json())
        .then((data) => {

            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop)
            })
            
            current = params.page
            console.log(current)
            
            obj = data
            const paginator = new Paginator(obj)

            const pagination = paginator.paginate(4)

            console.log(pagination)

            // pager function
            let el = document.getElementById('el')
            let pager = document.getElementById('pager')

            // pagination link min = 1
            if(current > 1){
                pager.innerHTML += "<li><a href='?page="+pagination[current-1].page.previous+"'onclick='goPage()'> Previous </a></li>"
            }

            for (let i = 0; i < pagination.length; i++) {
                if(current == (i+1)){
                    pager.innerHTML += "<li style='background-color: red; width: 20px'><a href='?page="+(i+1)+"'onclick='goPage()'>"+ (i+1) +"</a></li>"
                }else{
                    pager.innerHTML += "<li style='width: 20px'><a href='?page="+(i+1)+"'onclick='goPage()'>"+ (i+1) +"</a></li>"
                }
            }
            // pagination link max  = {pages}max
            if(current < 3){
                pager.innerHTML += "<li><a href='?page="+pagination[current-1].page.next+"'onclick='goPage()'> Next </a></li>"

            }


            //paginaton data
            const current_page_data = pagination[current-1].data

            for (let j = 0; j < current_page_data.length; j++) {
                el.innerHTML += "<li>" + current_page_data[j].name + "</li>"
            }
            
            
        } );
        
    </script> -->
</body>
</html>