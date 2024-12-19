<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="w-full grid justify-center mb-10">
        <form id="addform" action="./controller/controller.php" method="post" class="grid gap-1 w-2/12">
            <label for="product">product: </label>
            <input type="text" name="product" class="text-black" >
            <label for="descreption">Descreption: </label>
            <input type="text" name="descreption" class="text-black" >
            <label for="prix">prix: </label>
            <input type="number" name="prix" class="text-black" >
            <input type="submit" class="bg-blue-700 p-1 mt-2 cursor-pointer rounded-md font-bold">
        </form>
    </div>
</body>
</html>