const payload = {
  data: "DEC25-45PC",
  barcode_format: "code_128",
  output_format: "SVG",
  width: 200,
  height: 50,
  margin: 0
};

fetch("https://api.myapi.rest/api/barcode/generate", {
  method: "POST",
  headers: {
    "Authorization": "Bearer <API_KEY>",
    "Content-Type": "application/json"
  },
  body: JSON.stringify(payload)
})
  .then(r => r.text())
  .then(console.log);
