function write() {
  console.log("Write function is working");

  //Get all input element values
  var event = document.getElementById("event").value;
  var place = document.getElementById("place").value;
  var activity = document.getElementById("activity").value;
  var nearbyPlace = document.getElementById("nearby_place").value;
  var creature = document.getElementById("creature").value;
  var count = document.getElementById("count").value;
  var verb = document.getElementById("verb").value;
  var thing = document.getElementById("thing").value;
  var relative = document.getElementById("relative").value;
  var emotion = document.getElementById("emotion").value;

  //Get value for checkbox
  var selectedAnimal = document.querySelector('input[name="animal"]:checked');

  //Assign image path according to the checkbox value
  var imagePath;
  if (selectedAnimal.value === "cats") {
    imagePath = "images/cats.png"; //If selected animal is cat choose cat image
  } else {
    imagePath = "images/spider.png"; // else choose spider image
  }
  //Store the html div
  var madLibStory = `<div class="panel light-bg h-100"><h2>Your Story!</h2>
        <img class='m-auto d-block' src=${imagePath}>
        It was the end of the Halloween ${event} night. All the people, children
        and parents were going to ${place}. All
        were wearing Halloween costumes. Chris, a 5-year-old boy,
        ${activity} alone on a bench by his
        home. His grandparents had slept, but he was still waiting for
        his elder brothers, sisters, and other family members to return.
        He sees a horrible, ghost-looking man near
        ${nearbyPlace}. Chris says hi to the
        scary-looking man but fails to get a proper response. Then the
        ghost-looking man walks towards him, and Chris kindly asks him,
        "Mr, where are my brothers?". The man keeps his silence. Even
        though it is an awkward situation, Chris enjoys the ghost-looking
        man's company, and then he asks to borrow his costume. But the
        man has different intentions. The eyes of the man suddenly turn
        into scary red as it was a dreadful
        ${creature}. He wants to catch him!
        Suddenly, a ${count} of people pass by
        them. Ghost-looking-man was going to but couldn't
        ${verb} him, decided to hide himself
        behind a ${thing}. Chris now knows
        something is up with the man. Suddenly, an old man from behind
        calls up Chris in a familiar voice. The old man turns out to be
        Chris's ${relative}. He hears Chris's
        cries, grabs him by the arm, and then they both return home
        ${emotion}.</div>`;

  // Display the mad lib story
  document.getElementById("output").innerHTML = madLibStory;
}
