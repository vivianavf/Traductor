<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <! -- <img src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-language-communication-wanicon-lineal-color-wanicon.png"/>    
    
  </head>
  <body>
    <table class="divisor">
    <tr>
      <td>
      <img src= "https://ps.w.org/multilanguage/assets/icon-128x128.gif?rev=2565228"/>
      </td>

      <td>
      <form action='translate.php' method='GET'>
    <table class="round_table">
    <tr>
      <td><select class="rounded" name="origen">
      <option value ="es">Español</option>
      <option value ="en">English</option>
      <option value ="pt">Português</option>
      <option value ="it">Italiano</option>
      </select></td>

      <td>
      <img src="https://freepngdesign.com/content/uploads/images/right-arrow-4387.png"
      width="15"
      height="15">
      </td>

      <td><select class="rounded" name="destino">
      <option value ="es">Español</option>
      <option value ="en">English</option>
      <option value ="pt">Português</option>
      <option value ="it">Italiano</option>
      </select></td>
    </tr>

      <tr>
      <td><input type="text" class="rounded" id="palabra" name="palabra"></td>
      </tr>

      </table>

      <br>
      
      <button type="submit">Traducir</button>
      </form>
      </td>

    </tr>
    </table>   
  </body>

</html>