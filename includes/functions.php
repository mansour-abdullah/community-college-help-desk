<?php

//Helper Functions

//error and sccuess message alert boxes
function check($fields = array()){
    foreach($fields as $field){
        if (empty($field)){
            return true;
        }
    }
    
}
$msg='';
$msg_ar='';

function success($msg){
    return "<div class='success'>".$msg."</div>";
    
}
function error($msg){
    return "<div class='error'>".$msg."</div>";
    
}



//Database helper functions
function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if(!$result) {
    die("QUERY FAILED " . mysqli_error($connection));

	}
}


/********** Front End Functions****************/
/*
*The $lang varaible used to detrmain which lnaguage to chose
*by adding the value in the end of the table
*$lang = ar - en
*table_$lang
*ar =araic
*en = english
*/

function notice_board($lang)
{
    if($lang){
        $query = query("select * from notice_board_".$lang." order by id desc");
        confirm($query);

        while($row= mysqli_fetch_array($query))
        {
        echo"<tr>";
        echo  "<td>".$row["date"]."</td>
        <td>".$row["name"]."</td><td>".$row["place"]."</td>" ;
        echo"</tr>";   
        }    
    }      
}

function tools($lang){
   if($lang){
        $query = query("select * from tools_".$lang." ");
        confirm($query);
        while($row = mysqli_fetch_array($query)){
        echo "<tr>"; 
        echo '<td class="tool"> <img  src="data:image/jpeg;base64,' . base64_encode($row["img"]) . '"></td>';
        echo '  <td>  '.$row["name"].'</span> </td><td><span>'.$row["descr"].'</td>';
        echo'<td><button id="del"><a href='.$row["link"].'>تحميل</a></button></td>';
        echo "</tr>"; 
   }
    } 
}   

function campus($lang){
    if($lang == "ar"){
    $query = query("select * from campus_ar");
    confirm($query);
    while($row = mysqli_fetch_array($query)){
    echo '  <img class="img" src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '">';
    echo ' <span class="text"><strong>اسم المبنى :</strong> '.$row["name"].'</span>';
    echo "<br/>";
    echo  " <br/>";
    echo '<span  class="text"> <strong>الوصف :</strong>   '.$row["descr"].'</span> <br/>';
    echo '<span  class="text"> <strong>خريطة المبنى :</strong>   </span> <br/>';
    echo ' <img class="map" src="data:image/jpeg;base64,' . base64_encode($row["map"]) . '">';
    echo "<div class='clearfix'></div><br/><hr/>";
    
    }  
}
    else{
        $query = query("select * from campus_en");
        confirm($query);
        while($row = mysqli_fetch_array($query)){
        echo '  <img class="img"   src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '">';
        echo ' <span class="text "  ><strong class="black">Building Name :</strong> '.$row["name"].'</span>';
        echo "<br/>";
        echo  " <br/>";
        echo '<span class="text "> <strong class="black">Description :</strong>   '.$row["descr"].'</span> <br/>';
        echo '<span class="text black"> <strong>Map :</strong>   </span> <br/>';
        echo ' <img class="map"   src="data:image/jpeg;base64,' . base64_encode($row["map"]) . '">';
        echo "<div class='clearfix'></div><br/><hr/>";
    
    }         
    }
}
    
function fqa($cat , $lang){
    if($lang == "ar"){
        $q= "س : ";
        $a = "ج : ";
    }
    else{
         $q= "ََQ : ";
        $a = "A : ";
    }
    $query = query("select * from fqa_".$lang." where cat_id='{$cat}'");
    confirm($query); 
    echo "<table class='table'>";
    while($row = mysqli_fetch_array($query)){
    echo "<tr><td class='q'><span> " .$q.$row["question"]." </span> </td></tr>  
    <tr><td class='a'> <span>  " .$a.$row["ans"]."</span></td></tr>";

    }
    echo "</table>";
   }

function staff($dept,$lang){    
    if($lang){
        $query = query("select * from staff_".$lang." where dept_id='{$dept}'");
        confirm($query); 
        while($row = mysqli_fetch_array($query)){
        echo"<tr>";
        echo  "<td>".$row["name"]."</td>
        <td>".$row["office"]."</td><td>".$row["Phone"]."</td><td>".$row["email"]."</td>" ;
        echo"</tr>";   
        }
    }
}


/*********Admin Functions****************/
/*
*The $lang varaible used to detrmain which lnaguage to chose
*by adding the value to the end of the table
*$lang = ar - en
*table_$lang
*ar =araic
*en = english
*/
 
 function get_fqa($cat , $lang)
{
    if($lang){
        $query=query("select * from fqa_".$lang." where cat_id = '{$cat}' ");
        confirm($query);
        while($row=mysqli_fetch_assoc($query))
        {
        echo "<tr>" ;   
        echo "<td><form method='post' action=''>
        <input type='text' value=".$row["id"]." name='id' readonly ></td>";
        echo "<td><textarea rows='5' cols='25' name='question'>".trim($row["question"])."</textarea></td>";
        echo "<td><textarea rows='5' cols='25' name='ans'>".$row["ans"]." </textarea></td><td> ";
        //query to get category name based on id
        $cat_name = query("select * from category_".$lang." where id=".$row["cat_id"]. " ");
        confirm($cat_name);    
         while($cat_row=mysqli_fetch_assoc($cat_name)){    
        echo "<select name='cat'>
        <option value=".$cat_row['id'].">".$cat_row['name']."</option>";
        }
         //get categories menu
        $cat_menu=query("select * from category_".$lang." ");
        confirm($cat_name); 
          while($cat_row=mysqli_fetch_assoc($cat_menu)){    
        echo "<option value=".$cat_row['id'].">".$cat_row['name']."</option>";
        }    
                
        echo " </td><td><button type='submit' name='edit' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></td></form> ";
        echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>"; 
        echo "</tr>";  
        }   
    

    }
 }
 


 function get_contact($lang){
     if($lang){
        $query=query("select * from asked_questions_".$lang." ");
        confirm($query);
        while($row=mysqli_fetch_assoc($query)){
        echo "<tr>";   
        echo "
        <td><form method='post' action=''>
        <br><input type='text' value=".$row["id"]." name='id'readonly > </td>
        <td><input type='text' value=".$row["name"]." name='name'readonly ></td>
        <td><input type='email' value=".$row["Email"]." name='email'readonly > </td>
        <td><textarea rows='5' cols='5' name='question' id='area'>".$row["question"]." </textarea></td>
        <td><textarea rows='5' cols='5' name='ans' id='area'>".$row["ans"]." </textarea></td><td>";
      //query to get category name based on id
        $cat_name = query("select * from category_".$lang." where id=".$row["cat_id"]. " ");
        confirm($cat_name);    
         while($cat_row=mysqli_fetch_assoc($cat_name)){    
        echo "<select name='category'>
        <option value=".$cat_row['id'].">".$cat_row['name']."</option>";
        }
         //get categories menu
        $cat_menu=query("select * from category_".$lang." ");
        confirm($cat_name); 
          while($cat_row=mysqli_fetch_assoc($cat_menu)){    
        echo "<option value=".$cat_row['id'].">".$cat_row['name']."</option>";
        }    
        echo "<td><button type='submit' name='insert' id='edit' ><i class='fa fa-plus-square' aria-hidden='true'></i></button></form></td>" ;
      echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>"; 
        echo "</tr>";   
        }
     }

 }
 

function get_nb($lang){
        if($lang){
            $query=query("select * from notice_board_".$lang." ");
            confirm($query);
            while($row=mysqli_fetch_assoc($query)){
            echo "<tr>";   
            echo "
            <td><form method='post' action=''>
            <br><input type='text' value=".$row["id"]." name='id'readonly > </td>
            <td><textarea name='name'>".$row["name"]."</textarea></td>
            <td><textarea name='place'> ".trim($row["place"])."</textarea></td>
            <td><input type='date' value=".date('Y-m-d',strtotime($row["date"]))." name='date' ></td>
            <td><button type='submit' name='edit-nb' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></td></form>"; 
            echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>"; 
            echo "</tr>";
            } 
            
        }
    
}

function get_campus($lang){
      if($lang){
        $query=query("select * from campus_".$lang. " ");
        confirm($query);
        while($row=mysqli_fetch_assoc($query)){
        echo "<tr>";   
        echo "
        <td><form method='POST' action='' enctype='multipart/form-data' >
        <br> <input type='text' value=".$row["id"]." name='id'readonly > </td>
        <td> <textarea rows='2' cols='10' name='name' id='area'>".$row["name"]." </textarea></td>
        <td><img class='cmp' src='data:image/jpeg;base64," . base64_encode($row["image"]) . "'></td>
        <td><img class='cmp' src='data:image/jpeg;base64," . base64_encode($row["map"]) . "'></td>
        <td><textarea rows='5' cols='25' name='desc' id='area'>".$row["descr"]." </textarea></td>
        <td><input type='file' name='image'></td>
        <td><input type='file' name='map'></td>
        <td><button type='submit' name='edit' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></form></td>";
          echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>"; 
        echo "</tr>"; 
        } 
            
        }

}


function get_tools($lang){
      if($lang){
            $query= query("select * from tools_".$lang." ");
            confirm($query);
            while($row=mysqli_fetch_assoc($query)){
            echo "<tr>";   
            echo "
            <td><form method='POST' action='' enctype='multipart/form-data' >
            <br> <input type='text' value=".$row["id"]." name='id'readonly > </td>
            <td> <textarea rows='3' cols='10' name='name' id='area'>".$row["name"]." </textarea></td>
            <td> <textarea rows='3' cols='20' name='link' id='area'>".$row["link"]." </textarea></td>
            <td><textarea rows='5' cols='25' name='desc' id='area'>".$row["descr"]." </textarea></td>
            <td><img class='cmp' src='data:image/jpeg;base64," . base64_encode($row["img"]) . "'></td>
            <td><input type='file' name='image'></td>
            <td><button type='submit' name='edit-tool' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></form></td>"; 
            echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>";
            echo "</tr>";
            } 
            
        }

}

 
 function get_staff($dept , $lang){
  if($lang){
        $query=query("select * from staff_".$lang. " where dept_id = '{$dept}' ");
        confirm($query);
        while($row=mysqli_fetch_assoc($query)){
        echo "<tr>";   
        echo "
        <td><form method='POST' action=''>
        <br> <input type='email' value=".$row["id"]." name='id'readonly > </td>
        <td> <input type='text' value=".$row["name"]." name='name' ></td>
        <td> <input type='text' value=".$row["office"]." name='office'></td>
        ";
            //query to get department name based on id
        $dept_name = query("select * from departments_".$lang." where id=".$row["dept_id"]. " ");
        confirm($dept_name);  
               while($dept_row=mysqli_fetch_assoc($dept_name)){    
        echo "<td><select name='dept'>
        <option value=".$dept_row['id'].">".$dept_row['name']."</option>";
        }
         //get departments menu
        $dept_menu=query("select * from departments_".$lang." ");
        confirm($dept_name); 
          while($dept_row=mysqli_fetch_assoc($dept_menu)){    
        echo "<option value=".$dept_row['id'].">".$dept_row['name']."</option>";
        }    
        echo"</select></td>
        <td><input type='text' value=".$row["Phone"]." name='phone' > </td>
        <td><input type='text' value=".$row["email"]." name='email' > </td>
        <td><button type='submit' name='submit' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></form></td> 
        <td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>";
        echo "</tr>";  
        }

            
        }
}
/************Userrs********/

function get_users(){
    

$query=query("select * from admin ");
confirm($query);
 while($row=mysqli_fetch_assoc($query)){
  echo "<tr>" ;   
echo "<td><form method='POST' action=''><input type='text'  value=".$row["id"]." name='id' readonly></td>";
echo"<td><input type='text' name='user' value='" .trim($row["username"])."' >"; 
echo  "<td><input type='text' name='pass' value='".trim($row["password"])."' >";
echo "<td><button type='submit' name='edit' id='edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></form></td> ";
echo "<td><button id='del'><a href='javascript:ConfirmDelete(". $row["id"].")'><i class='fa fa-trash' aria-hidden='true' fa-2x></i></a></button></td>";
echo "</tr>";        
     
     
 }
}

/******STATISTICS****/

function stat_fqa($cat , $lang){
    $query=query("SELECT count(*) as total from fqa_".$lang." WHERE cat_id = ".$cat." ");
     while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
}

function stat_contactus($lang){
    $query=query("SELECT count(*) as total from asked_questions_".$lang." ");
     while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
}


function stat_nb($lang){
    //gget total events
    $query=query("SELECT count(*) as total from notice_board_".$lang." ");
     while($row=mysqli_fetch_assoc($query)){
         $events[0] = $row['total'];
     }  
      //past events
   $query=query("SELECT count(*) as today from notice_board_".$lang." where date < CURDATE() ");
     while($row=mysqli_fetch_assoc($query)){
         $events[1] = $row['today'];
     }
    //get today events
    $query=query("SELECT count(*) as today from notice_board_".$lang." where date = CURDATE() ");
     while($row=mysqli_fetch_assoc($query)){
         $events[2] = $row['today'];
     }
  
    
      //Upcoming events
   $query=query("SELECT count(*) as today from notice_board_".$lang." where date  > CURDATE() ");
     while($row=mysqli_fetch_assoc($query)){
         $events[3] = $row['today'];
     }
    return $events;
}

function campus_stat($lang){
    $query = query("SELECT count(*) as total from campus_".$lang." ");
      while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
    
}

function staff_stat($dept , $lang){
    $query = query("SELECT count(*) as total from staff_".$lang." WHERE dept_id = ".$dept." ");
      while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
    
}

function tools_stat($lang){
    $query = query("SELECT count(*) as total from tools_".$lang." ");
      while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
    
}
function users_stat(){
    $query = query("SELECT count(*) as total from admin");
      while($row=mysqli_fetch_assoc($query)){
         $total = $row['total'];
     }
    return $total;
    
}


?>