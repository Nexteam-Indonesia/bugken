# Bugken

is a simple self-hosted error monitoring tool with laravel based.

### Json Error Payload

```json
{
  "message" : "get_error_message_from_exception",
  "log" : {
    "message" : "get_error_message_from_exception",
    "line" : "get_error_line_from_exception",
    "file" : "get_error_file_from_exception",
    "class" : "get_error_class_from_exception",
    "host" : "get_app_host",
    "environment" : "get_app_environment"
  }
}
```
