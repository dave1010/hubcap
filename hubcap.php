<?php
$system = 'you are a coding agent. you can read and write files. Eg `cat helloworld.txt`, `echo "hello\nworld" > helloworld.txt`
output the next command required to progress your goal. output `DONE` when done.';

function chat($prompt, $system = null) {
    $options = $system ? "-s " . escapeshellarg($system) : "-c"; // start with system prompt, or continue
    echo "\n\033[0;36m[PROMPT]\033[0m $prompt\n";
    $response = shell_exec("llm $options " . escapeshellarg($prompt)) . "\n";
    echo "\033[1;33m[RESPONSE]\033[0m $response\n";
    return $response;
}

$response = chat("GOAL: {$argv[1]}\n\nWHAT IS YOUR OVERALL PLAN?", $system);

while (true) {
    $response = trim(chat("SHELL COMMAND TO EXECUTE OR `DONE`. NO ADDITIONAL CONTEXT OR EXPLANATION:"));
    if (trim($response) === "DONE") break;

    sleep(3);
    unset($outputArray);
    exec($response . " 2>&1", $outputArray, $returnCode);
    $output = implode("\n", $outputArray); 
    $response = chat("COMMAND COMPLETED WITH RETURN CODE: $returnCode. OUTPUT:\n$output\n\nWHAT ARE YOUR OBSERVATIONS?");
}
