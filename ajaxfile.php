<?php
        ## Database configuration
        include 'config.php';

        ## Read value
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = mysqli_real_escape_string($con,$_POST['search']['value']); // Search value

        ## Search 
        $searchQuery = " ";
        if($searchValue != ''){
        $searchQuery = " and (emp_name like '%".$searchValue."%' or 
                email like '%".$searchValue."%' or 
                city like'%".$searchValue."%' ) ";
        }

        ## Total number of records without filtering
        $sel = mysqli_query($con,"select count(*) as allcount from football_match");
        $records = mysqli_fetch_assoc($sel);
        $totalRecords = $records['allcount'];

        ## Total number of record with filtering
        $sel = mysqli_query($con,"select count(*) as allcount from football_match WHERE 1 ".$searchQuery);
        $records = mysqli_fetch_assoc($sel);
        $totalRecordwithFilter = $records['allcount'];

        ## Fetch records
        $empQuery = "select * from employee WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
        $empRecords = mysqli_query($con, $empQuery);
        $data = array();

        while ($row = mysqli_fetch_assoc($empRecords)) {
        $data[] = array( 
            "league"=>$row['league'],
            "match_id"=>$row['match_id'],
            "match_date"=>$row['match_date'],
            "home_id"=>$row['home_id'],
            "away_id"=>$row['away_id']
        );
        }

        ## Response
        $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
        );

        echo json_encode($response);

?>