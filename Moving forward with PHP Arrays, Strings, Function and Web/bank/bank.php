<?php

require_once 'functions.php';

$currentCounts = [
  '111.111.111-11' => ['owner' => 'Lucas', 'balance' => 700],
  '222.222.222-22' => ['owner' => 'Bicalho', 'balance' => 2000],
  '333.333.333-33' => ['owner' => 'Fraga', 'balance' => 300]
];

showCurrentAccounts($currentCounts);

showMessage("");

$currentCounts['111.111.111-11'] = withdraw($currentCounts['111.111.111-11'], 500);
$currentCounts['222.222.222-22'] = withdraw($currentCounts['222.222.222-22'], 500);
$currentCounts['333.333.333-33'] = withdraw($currentCounts['333.333.333-33'], 500);

showMessage("");

$currentCounts['111.111.111-11'] = deposit($currentCounts['111.111.111-11'], -500);
$currentCounts['222.222.222-22'] = deposit($currentCounts['222.222.222-22'], 2000);
$currentCounts['333.333.333-33'] = deposit($currentCounts['333.333.333-33'], 500);

ownerWithCapitalLetters($currentCounts['333.333.333-33']);

unset($currentCounts['222.222.222-22']);
// removerOwner($currentCounts['222.222.222-22']);

showMessage("");

showCurrentAccounts($currentCounts);
?>

<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Current Accounts</h1>
  </header>

  <dl>
    <?php foreach ($currentCounts as $cpf => $account) { ?>
      <dt>
        <h3><?= $account['owner']; ?> - <?= $cpf ?>; </h3>
      </dt>
      <dd>Balance: <?= $account['balance']; ?></dd>
    <?php } ?>
  </dl>

</body>

</html>