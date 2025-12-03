# Quickstart — Barcode API

## Generate a Barcode

```bash
curl --location 'https://api.myapi.rest/api/barcode/generate'   --header 'Content-Type: application/json'   --header 'Authorization: Bearer <API_KEY>'   --data '{
    "data": "DEC25-45PC",
    "barcode_format": "code_128",
    "output_format": "SVG",
    "width": 200,
    "height": 50,
    "margin": 0
  }'
```

### Sample Response
```json
{
  "id": 5,
  "barcode": "<BASE_64_DATA>"
}
```
