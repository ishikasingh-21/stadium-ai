<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data["message"])) {
    echo json_encode([
        "error" => [
            "message" => "No message received"
        ]
    ]);
    exit;
}

$message = strtolower(trim($data["message"]));
$stadiums = [
    "mumbai" => [
        "name" => "Wankhede Stadium",
        "city" => "Mumbai",
        "capacity" => "33,000",
        "location" => "Maharashtra",
        "image" => "Image/wankhede.jpeg"
    ],

    "ahmedabad" => [
        "name" => "Narendra Modi Stadium",
        "city" => "Ahmedabad",
        "capacity" => "1,32,000",
        "location" => "Gujarat",
        "image" => "Image/narendra_modi.jpeg"
    ],

    "kolkata" => [
        "name" => "Eden Gardens",
        "city" => "Kolkata",
        "capacity" => "66,000",
        "location" => "West Bengal",
        "image" => "eden_garden.jpeg"
    ]
];



if (strpos($message, "hello") !== false || strpos($message, "hi") !== false) {

    $reply = "Hello! Welcome to StadiumAI. How can I help you?";

} elseif (strpos($message, "stadium") !== false) {

    $reply = "StadiumAI provides information about stadiums, locations, capacity and matches.";

} elseif (strpos($message, "india") !== false) {

    $reply = "India has many famous stadiums like Narendra Modi Stadium, Eden Gardens and Wankhede Stadium.";

} elseif (strpos($message, "match") !== false) {

    $reply = "You can check upcoming matches and stadium details using StadiumAI.";

} elseif (strpos($message, "narendra modi") !== false) {

    $reply = "Narendra Modi Stadium is located in Ahmedabad, Gujarat. It is one of the world's largest cricket stadiums.";

} elseif (strpos($message, "wankhede") !== false) {

    $reply = "Wankhede Stadium is located in Mumbai, Maharashtra.";

} elseif (strpos($message, "eden") !== false) {

    $reply = "Eden Gardens is located in Kolkata, West Bengal.";

}elseif (strpos($message, "capacity") !== false) {

    $reply = "Narendra Modi Stadium has a capacity of around 1,32,000 spectators.";

} elseif (strpos($message, "location") !== false) {

    $reply = "Tell me the stadium name and I will provide its location.";

} elseif (strpos($message, "largest") !== false) {

    $reply = "Narendra Modi Stadium in Ahmedabad is one of the largest cricket stadiums in the world.";

} elseif (strpos($message, "football") !== false) {

    $reply = "Famous football stadiums include Camp Nou, Santiago Bernabeu and Wembley Stadium.";

} elseif (strpos($message, "cricket") !== false) {

    $reply = "StadiumAI can help you with cricket stadium information and matches.";

} elseif (strpos($message, "help") !== false) {

    $reply = "You can ask me about stadiums, location, capacity, cricket and football.";

}
else {

    $reply = "Sorry, I am still learning. Please ask about stadiums, matches or locations.";

}

 foreach($stadiums as $city => $stadium){

    if(strpos($message, $city) !== false){

        $reply = 
        "🏟️ Stadium Name: ".$stadium["name"]."\n".
        "📍 City: ".$stadium["city"]."\n".
        "👥 Capacity: ".$stadium["capacity"]."\n".
        "📌 Location: ".$stadium["location"];

        break;
    }
}

echo json_encode([
    "reply" => $reply
]);

?>