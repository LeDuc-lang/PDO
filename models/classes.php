<?php 


function getAllClasses() {
  $db = dbConnect();
  $query = $db->query('SELECT * FROM classes');
  $classes = $query->fetchAll();
  return $classes;
}

function getClassById($id) {
  $db = dbConnect();
  $query = $db->prepare('SELECT name FROM classes WHERE classes.id = ?');
  $query->execute([$id]);
  $class = $query->fetch();
  return $class;
}

function addClass($name) {
  $db = dbConnect();
  $query = $db->prepare('INSERT INTO classes (name) VALUES (?)');
  return $query->execute([$name]);
}

function deleteClass($id) {
  $db = dbConnect();
  $query = $db->prepare('DELETE FROM classes WHERE id = ?');
  return $query->execute([$id]);
}

function updateClass($name) {
  $db = dbConnect();
  $query = $db->prepare('UPDATE classes SET name = ?');
  return $query->execute([$name]);
}


