<?php

header('Content-type: text/css; charset:UTF-8');

?>

body
{
  background-color: brown;
  margin: 0;
}

/* nie dziala */

.container
{
  background-color:rgb(233, 76, 76);
  width: 300px;
  padding: 100px;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
}

.logo
{
  width: 352px;
  height: 165px;
  margin-top:20px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.menu
{
  width: 100%;
  text-align: center;
  background-color: rgb(195, 50, 50);
  border-top: rgb(56, 7, 7);
  border-bottom:rgb(56, 7, 7);
  margin-top:50px;
  height: 30px;
  margin-right: 50px;
  position: sticky;
  top:0;
  left: 0;
  z-index:100;
}

ol 
{
  padding: 0;
  margin: 0;
  list-style-type: none;
  font-size: 18px;
  height: 30px;
  line-height: 200%;
  display: inline-block;
}

ol a
{
  color: black;
  text-decoration: none;
  display: block;
}

ol > li
{
  float: left;
  width: 267px;
  height: 30px;
  text-align: center;
  border-right: 1px solid brown;
}

ol > li:first-child
{
border-left:1px solid brown;
}

ol > li:hover
{
  background-color:rgb(175, 33, 33);
}

ol > li:hover > a
{
  color: rgb(56, 7, 7);
}

ol > li > ul 
{
list-style-type: none;
padding:0;
margin:0;
height: 40px;
display: none;
}

ol > li:hover > ul
{
  display: block;
}

ol > li > ul > li 
{
  background-color:rgb(209, 53, 53);
  position: relative;
  z-index: 100;
  border-top: 1px solid black;
}

ol > li > ul > li:hover
{
  background-color:rgb(156, 28, 28);
  position: relative;
  z-index: 100;
}
  ol > li > ul > li:hover > a
  {
    color: rgb(56, 7, 7);
  }

ol > li > ul > li:last-child
{
  border-bottom: 1px solid rgb(56, 7, 7);
}

.text
{
  margin-top:40px;
  font-size: 18px;
  margin-left: 30px;
  margin-right: 30px;
}

.design
{
  color: black;
  background-color:rgb(195, 50, 50);
  padding: 10px;
  margin-top: 70px;
  margin-right: auto;
  margin-left: auto;
  text-align: center;
  width: 1200px;
}

.footer
{
  background-color:rgb(195, 50, 50);
  text-align: center;
  margin-top: 97px;
}

/* #search
{
  background-color: rgb(219, 60, 60);
  width: 300px;
  padding: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 100px;
  padding-top: 30px;
} */