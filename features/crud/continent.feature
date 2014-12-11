Feature: I would like to edit continents

  Scenario Outline: Insert records
    When I go to "/admin/continent"
#    Then I dump the contents
    Then the response status code should be 200
    Then I should not see "<continent>"
    And I follow "Create a new entry"
#    Then I dump the contents
    Then the response status code should be 200
    Then I should see "continent creation"
    When I fill in "Name" with "<continent>"
    And I fill in "Length" with "<length>"
    And I press "Create"
#    Then I dump the contents
    Then the response status code should be 200
    Then I should see "<continent>"
    And I should see "<length>"

  Examples:
    |    continent    | length |
    | ABC         | 7182   |
    | Vistula     | 1234   |
#    | The Thames  | 555    |
#    | Lorem       | 6      |
#    | Ipsum       | 999999 |


  Scenario Outline: Edit records
    When I go to "/admin/continent"
    Then I should not see "<new-continent>"
    And I follow "<old-continent>"
    Then I should see "<old-continent>"
    When I follow "Edit"
    When I fill in "Name" with "<new-continent>"
    And I fill in "Length" with "<new-length>"
    And I press "Update"
    And I follow "Back to the list"
    Then I should see "<new-continent>"
    And I should see "<new-length>"
    And I should not see "<old-continent>"

  Examples:
    |  old-continent    |    new-continent    | new-length |
    | Vistula       | VI-stula        | 9876       |
#    | Lorem         | Dolor sit amet  | 3333       |



  Scenario Outline: Delete records
    When I go to "/admin/continent"
    Then I should see "<continent>"
    And I follow "<continent>"
    Then I should see "<continent>"
    When I press "Delete"
    And I should not see "<continent>"

  Examples:
    |  continent    |
    | ABC       |
    | VI-stula  |



  Scenario: I want to check the number of records
    When I go to "/admin/continent"
    Then I should see 0 ".records_list tbody tr" elements

