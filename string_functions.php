<?php
# substr()
# Returns a portion of a string
//$output = substr('Hello', 1);
//$output = substr('Hello', 1,3);
//$output = substr('Hello', -2); // starting from the back
//echo $output;

# strlen()
# Returns the length of a string

//$output = strlen('Hello World');
//echo $output;

# strpos()
# Finds the position of the first occurrence of a substring

//$output = strpos('Hello World', 'o');
//echo $output;

# strrpos()
# Finds the position of the last occurrence of a substring

//$output = strrpos('Hello World', 'o');
//echo $output;

# trim()
# trims whitespace

//$text = 'Hello World         ';
////var_dump($text);
//
//$text = trim($text);
//var_dump($text);


# strtoupper()
# Makes everything to uppercase


# strtolower()
# Makes everything to lowercase

# ucwords()
# Capitalize the first letter of each word

//$output = ucwords('hello world');
//echo $output;

# str_replace
# Replace all occurrences of a search string with a replacement

//$text = 'Hello World';
//$output = str_replace('World', 'Everyone', $text);
//
//echo $output;

# is_string()
# Check if string
//
//$val = 154;
//$output = is_string($val); // returns true if $val is a string and nothing if it isn't
//echo  $output;

//$values = array(true, false, null, 'abc' , 33, '33', 22.4, '22.4', '', '  ', 0, '0');
//
//foreach ($values as $value) {
//    if (is_string($value)) {
//        echo  "$value is a string<br />";
//    }
//}

# gzcompress()
# Compress a string

$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi 
blanditiis cum, dolore dolorum, harum illo, in libero nam natus non odio quidem 
repudiandae temporibus ullam voluptatum! Aperiam architecto doloribus dolorum impedit incidunt,
 inventore minima neque perferendis quos sint? Aliquid, ipsum, nemo! Aliquid dolorem,
  doloribus, ducimus exercitationem, itaque laboriosam magni omnis quibusdam quo 
  reiciendis rem reprehenderit? Deserunt eaque ipsa iste obcaecati. Ad, commodi cupiditate 
  dolorum earum eligendi eos, labore maxime molestiae nihil provident quas quia recusandae repellendus, 
  temporibus tenetur vero voluptatum! A accusamus adipisci aliquam aliquid aut 
  cupiditate dolores esse expedita harum illo impedit incidunt inventore iure labore laboriosam libero, 
  molestiae nihil officia perferendis praesentium quidem repellendus repudiandae sit tempore temporibus tenetur ullam 
  unde vel vitae voluptatum? Dolor, dolorum, magnam. Asperiores beatae corporis, 
  culpa dignissimos doloremque doloribus eius et in labore magnam maiores odio 
  omnis optio porro provident quas qui reiciendis rerum sint soluta tenetur totam 
  ut voluptatibus! In, placeat velit.';

$compressed = gzcompress($string);

//echo $compressed;

# gzuncompress()
# Uncompress a string

$original = gzuncompress($compressed);

echo $original;
