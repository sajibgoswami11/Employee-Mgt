<html>
  <body>
        
        <div class="leftmenu">
            <?php include("select_for_grant.php"); ?>
        </div>
          
         <br/>
        <br/>
        <form action="make_decision_query.php" method="post">
           <title>Decision<title/>
           <br/>
           <input type="radio" name="r2"  value="Granted"/>Granted
           <br/>
           <input type="radio" name="r2"  value="Denied"/>Denied

        <br/>
        <br/>
        </select>
        <input type=\"submit\" value=\"select\"/>
        </form>
        



       
    </body>
</html>