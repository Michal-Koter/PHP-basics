<?php
    $tags = "/<\/html>|<\/head>|<\/title>|<\/body>|<\/h[1-6]>|<\/p>|<\/div>|<\/span>|<\/em>|<\/strong>|<\/a>|<\/ol>|<\/ul>|<\/li>|-->|<\/header>|<\/nav>|<\/main>|<\/aside>|<\/nav>|<\/footer>|<\/table>|<\/tr>|<\/th>|<\/td>|<\/b>|<\/pre>|<\/small>|<\/mark>|<\/br>|<\/iframe>/";

    preg_match_all($tags,readline(),$matches,PREG_PATTERN_ORDER);
    foreach($matches[0] as $out)
        echo $out . " ";
?>