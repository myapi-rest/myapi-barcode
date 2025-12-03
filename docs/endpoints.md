# Endpoints — Barcode API

Base URL: `https://api.myapi.rest`

## POST `/api/barcode/generate`

Generate a barcode.

### Request Body

| Field           | Type   | Required | Description |
|-----------------|--------|----------|-------------|
| data            | string | Yes      | Value encoded into the barcode. |
| barcode_format  | string | Yes      | e.g., code_128, ean_13, upc_a. |
| output_format   | string | Yes      | PNG, JPG, or SVG. |
| width           | number | No       | Output width. |
| height          | number | No       | Output height. |
| margin          | number | No       | Margin size. |

### Success Response
```json
{
  "id": 5,
  "barcode": "<BASE_64_DATA>"
}
```

### Error Response
```json
{
  "type": "https://tools.ietf.org/html/rfc9110#section-15",
  "title": "Invalid request",
  "status": 400,
  "detail": "data field is required",
  "instance": "/api/barcode/generate"
}
```
