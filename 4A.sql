# menampilkan semua data dari tabel film
1. SELECT * FROM Film

# menampilkan data per genre
2. SELECT a.title, a.durasi, b.name,c.name,d.name,a.photo,a.durasi, a.rating
FROM Film AS a
LEFT JOIN Genre AS b
ON a.id_genre = b.id
LEFT JOIN Writer AS c
ON a.id_writer = c.id
LEFT JOIN Director AS d
ON a.id_genre = d.id
ORDER BY b.id

# menampilkan detail film berdasarkan id
3. SELECT *
FROM Film 
WHERE id = 2