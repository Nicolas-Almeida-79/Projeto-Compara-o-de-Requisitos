<?php
	$info = filter_input_array(INPUT_POST,FILTER_DEFAULT);
    $form;

    if ($info) {
        foreach ($info as $key => $value) {
            if ($key == "modeloCPU") {
                $form = "modeloCPU";
            }else if ($key == "modeloGPU") {
                $form = "modeloGPU";
            }else if ($key == "modeloRAM") {
                $form = "modeloRAM";
            }else if ($key == "nome") {
                $form = "nome";
            }
        }
    }
    if($info && $form == "modeloCPU"){
		$arrayInfo = array();
		if(file_exists(__DIR__ . "./cpu.json")){
			$stringInfo = file_get_contents(__DIR__ . "./cpu.json");
			$arrayInfo = json_decode($stringInfo, true);
		}
		$arrayInfo[] = $info;
		$infoJson = json_encode($arrayInfo);
		$file = fopen(__DIR__ . './cpu.json','w+');
		fwrite($file, $infoJson);
		fclose($file);
	}else
	if($info && $form == "modeloGPU"){
		$arrayInfo = array();
		if(file_exists(__DIR__ . "./gpu.json")){
			$stringInfo = file_get_contents(__DIR__ . "./gpu.json");
			$arrayInfo = json_decode($stringInfo, true);
		}
		$arrayInfo[] = $info;
		$infoJson = json_encode($arrayInfo);
		$file = fopen(__DIR__ . './gpu.json','w+');
		fwrite($file, $infoJson);
		fclose($file);
	}else
	if($info && $form == "modeloRAM"){
		$arrayInfo = array();
		if(file_exists(__DIR__ . "./ram.json")){
			$stringInfo = file_get_contents(__DIR__ . "./ram.json");
			$arrayInfo = json_decode($stringInfo, true);
		}
		$arrayInfo[] = $info;
		$infoJson = json_encode($arrayInfo);
		$file = fopen(__DIR__ . './ram.json','w+');
		fwrite($file, $infoJson);
		fclose($file);
	}else
	if($info && $form == "nome"){
		$arrayInfo = array();
		if(file_exists(__DIR__ . "./game.json")){
			$stringInfo = file_get_contents(__DIR__ . "./game.json");
			$arrayInfo = json_decode($stringInfo, true);
		}
		$arrayInfo[] = $info;
		$infoJson = json_encode($arrayInfo);
		$file = fopen(__DIR__ . './game.json','w+');
		fwrite($file, $infoJson);
		fclose($file);
	}
?>
<html>
    <head>
        <title>Benchmark Games</title>
    </head>
    <body>
        <form name="cadastroCPU" method="POST">
            <fieldset>
            <legend> Cadastrar CPU</legend>
                <label> Modelo: </label> <input type="text" name="modeloCPU" required><br>
                <label> Clockspeed: </label> <input type="text" name="clockspeed" required><br>
                <label> Turbo Speed: </label> <input type="text" name="turbospeed" required><br>
                <label> Cores (Nucleos): </label> <input type="text" name="cores" required><br>
                <label> GPU Integrada:</label> <input type="text" name="integrada" placeholder="Modelo da GPU integrada">
                <label> Deixar em branco caso não tenha...</label><br>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
        <form name="cadastroGPU" method="POST">
            <fieldset>
            <legend> Cadastrar GPU</legend>
                <label> Modelo: </label> <input type="text" name="modeloGPU" required><br>
                <label> Core Clock: </label> <input type="text" name="coreclock" required><br>
                <label> Memory Clock: </label> <input type="text" name="memory" required><br>
                <label> Maximum Memory: </label> <input type="text" name="maxmemory" required><br>
                <label> DirectX:</label> <input type="text" name="DirectX" required><br>
                <label> OpenGL:</label> <input type="text" name="OpenGL" required><br>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
        <form name="cadastroRAM" method="POST">
            <fieldset>
            <legend> Cadastrar RAM</legend>
                <label> Modelo: </label> <input type="text" name="modeloRAM" required><br>
                <label> Capacidade: </label> <input type="text" name="capacity" required><br>
                <label> Velocidade: </label> <input type="text" name="speed" required><br>
                <label> Latencia: </label> <input type="text" name="latency" required><br>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
        <form name="cadastroJogos" method="POST">
            <fieldset>
            <legend> Cadastrar Jogos</legend>
                <label> Nome: </label> <input type="text" name="nome" required><br>
                <label> CPU recomendada: </label> <input type="text" name="cpu" placeholder="Modelo da CPU recomendada" required><br>
                <label> GPU recomendada: </label> <input type="text" name="gpu" placeholder="Modelo da GPU recomendada" required><br>
                <label> RAM recomendada: </label> <input type="text" name="ram" placeholder="Modelo da RAM recomendada" required><br>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>