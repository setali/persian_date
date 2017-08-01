# PersianDate

<h3> Installation </h3>

Download this module and add in module directory and enable it.

<h3> How to work? </h3>
This module create a service that called by <br>
 <code>\Drupal::service('persian_date.get_jalali')->getJalali(FORMAT, TIMESTAMP)</code>

Example: 
 <br><code>\Drupal::service('persian_date.get_jalali')->getJalali('Y-n-j', 1501572172)</code>

<b>Parameters:</b>
 <br><code> format </code> Example: 'Y-n-j'
 <br><code> timestamp </code> Default: time()
 <br><code> tr_num </code> Default: 'en'
 <br><code> time_zone  </code> Default: 'Asia/Tehran' 

<b>Result:</b>
 <br><code>name</code> Example: Lorem ipsum
 <br><code>image</code> Example: Source of image
 
 
