<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weekly_expenses = [
    "gas"=>25,
    "food"=> 90,
    "entertainment"=>47
  ];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
function findNet($taxes,$ann,$mon,$wk,$ss){
  $total = 0;

  for($i =0;$i<count($taxes);$i++){
    $amt = $taxes[$i][0] * $taxes[$i][1];
    $total += $amt;
  }

  $total -= $ss;

  foreach($ann as $value){
    $total -= $value;
    }

  $monthly_income = $total/12;
  
  foreach($mon as $value){
    $monthly_income -= $value;
  }

  $weekly_income=$monthly_income/4.33;

  foreach($wk as $value){
    $weekly_income -=$value;
  }

  $savings = round($weekly_income*52,2);
  return $savings;
}

echo findNet($incomeSegments,$annualExpenses,$monthlyExpenses,$weekly_expenses,$socialSecurity);
echo "\n";
