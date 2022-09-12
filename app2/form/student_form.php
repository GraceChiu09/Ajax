<?php
$type=$_POST['type'];
?>
<?php
if ($type=='add') {
    echo "<h3>新增學員</h3>";
}else{
    echo "<h3>刪除學員</h3>";
}
?>
<div class="addform">
    <h3 class=>新增學員</h3>
    <form method="post">
      <br>
      <p>班級:<input type="number" name="classroom" id="classroom"></p>
      <p>座號:<input type="number" name="seatnum" id="seatnum"></p>
      <p>姓名:<input type="text" name="name" id="name"></p>
      <p>生日:<input type="date" name="birthday" id="birthday"></p>
      <p>
       <?php
       if ($type='add') {
        # code...
       }else{
        
       }


      </p>
      <p>
        <input type="button" value="確認新增" onclick="create()">
        <input type="button" value="取消" onclick="$('#studentForm')">
    </p>
    </form>
  </div>