# Errors — Barcode API

All barcode errors follow the myapi.rest structured format:

```json
{
  "type": "https://tools.ietf.org/html/rfc9110#section-15",
  "title": "Invalid request",
  "status": 400,
  "detail": "barcode_format is invalid",
  "instance": "/api/barcode/generate"
}
```

## Common Codes

| Status | Meaning |
|--------|---------|
| 400 | Invalid request |
| 401 | Unauthorized |
| 429 | Rate limit exceeded |
| 500 | Internal error |
