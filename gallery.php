<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
    <style>
    .frame {
  width: 500px;
  height: 500px;
  border: 1px solid #ccc;
  position: relative;
  overflow: hidden;
}

.gallery {
  display: flex;
  flex-wrap: wrap;
}

.gallery img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.gallery img:hover {
  transform: scale(1.2);
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.image-overlay img {
  max-width: 100%;
  max-height: 100%;
}

.gallery img:hover + .image-overlay {
  opacity: 1;
}

</style>
</head>
<body>
<div class="frame">
    <div class="gallery">
  <img src="https://i.pinimg.com/736x/7d/25/e4/7d25e4c946fa6e004b37b54a34fd8004.jpg" alt="Image 1">
  <img src="https://i.pinimg.com/736x/7d/25/e4/7d25e4c946fa6e004b37b54a34fd8004.jpg" alt="Image 2">
  <img src="https://i.pinimg.com/736x/48/10/8f/48108f24714a137c54ad30789e76da72.jpg" alt="Image 3">
  <img src="https://i.pinimg.com/736x/34/bd/6c/34bd6ca2e8efafd6176673212f30c041.jpg" alt="Image 4">
  <img src="https://i.pinimg.com/736x/9a/56/0c/9a560cd17ba3868b7065a6884f071d14.jpg" alt="Image 5">
  <img src="https://i.pinimg.com/564x/6b/ec/d1/6becd1b3d2e9b1adae4524bd67617ede.jpg" alt="Image 6">
</div>
<div class="image-overlay">
    <img src="" alt="Full Image">
  </div>
</div>
</body>
</html>