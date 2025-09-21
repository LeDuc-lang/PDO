<?php

function getAllPersonnages() {
  $db = dbConnect();
  $query = $db->query('SELECT * FROM personnages');
  $personnages = $query->fetchAll();
  return $personnages;
}

function getPersonnageById($id) {
  $db = dbConnect();
  $query = $db->prepare('SELECT * FROM personnages WHERE id = ?');
  $query->execute([$id]);
  $personnage = $query->fetch();
  return $personnage;
}

function addPersonnage($name, $classe_id, $atk, $pv, $xp) {
  $db = dbConnect();
  $query = $db->prepare('INSERT INTO personnages (name, classe_id, atk, pv, xp) VALUES (?, ?, ?, ?, ?)');
  return $query->execute([$name, $classe_id, $atk, $pv, $xp]);
}

function deletePersonnage($id) {
  $db = dbConnect();
  $query = $db->prepare('DELETE FROM personnages WHERE id = ?');
  return $query->execute([$id]);
}

function updatePersonnageClasse($id, $name, $classe_id) {
  $db = dbConnect();
  $query = $db->prepare('UPDATE personnages SET classe_id = ?, name = ? WHERE id = ?');
  return $query->execute([$classe_id, $name, $id]);
}



