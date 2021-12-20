Feature: Creating a task

  Rules:
  - Tasks must have a title
  - Tasks can have a description
  - Tasks can have a status of Todo, In Progress, Done or Cancelled
  - Tasks will default to a status of Todo if one isn't set
  - Tasks can move between any status
  - Tasks can optionally be assigned to a user
  - Tasks can optionally have a due date that can be set to any date past or future
  - Tasks can optionally have a priority of low, medium, high, or urgent
  - Tasks can optionally have labels
  - If a task is created with a label that doesn't already exist, then that label will be created

  Scenario: Creating a task without setting a status
    When I create a task without setting the status
    Then the status will be "Todo"
