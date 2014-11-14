Feature: Web pages

  Scenario: Geography/Continents/Asia
    Given I am on "/geography/continets/asia.html"
     Then the response status code should be 200
     Then I should see "This is The Geography/Continents/Asia page!"