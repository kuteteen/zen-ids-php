<?php

function divide($a, $b) {
  if ($b == 0)
    throw new Exception("Division by zero!\n");
  return $a / $b;
}

try {
  while (true) {
    $num = rand(0, 6);
    if ($num < 0) {
      print "Num is a foobar!\n";
    } else {
      if ($num < 5) {
        switch ($num) {
        case 1: print "foo\n";
        case 2: print "bar\n";
        case 3: print "zot\n";
        case 4: print "nonsense: " . divide($num, 0);
        }
      } else {
        switch ($num) {
        case 5: print "zee\n";
        case 6: print "zoo\n";
        }
      }
    }
    $num--;
  }
} catch (Exception $e) {
  print("Error: " . $e . "\n");
}

?>
