<?php
function print_book($book = '-', $authorName = '-', $authorSurname = '-', $year = '-', $publisher = '-')
{
    return "Назва книги: $book\nАвтор: $authorName $authorSurname\nРік написання: $year\nВидавництво: $publisher";
}
$book = "Harry Potter";
$author_name = "Joanne";
$author_surname = "Rowling";
$year = 1997;
$publisher = "Vivat";
echo print_book($book, $author_name, $author_surname, $year, $publisher);
