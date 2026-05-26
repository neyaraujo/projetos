<?php 
$prompt = "Crie um pefil profissional curto para currículo com base nestas habilidades: HTML, CSS, JavaScript, PHP";


$dados = [
    "model" => "gpt-4.1-mini",
    "messages" => [
        [
            "role" => "user",
            "content" => $prompt
        ]
    ]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/chat/completions");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

$apikey = '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';

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $apikey
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));

$resposta = curl_exec($ch);

curl_close($ch);

echo '<pre>';
print_r($resultado = json_decode($resposta, true));
echo '</pre>';

echo $resultado['choices'][0]['message']['content'];





?>