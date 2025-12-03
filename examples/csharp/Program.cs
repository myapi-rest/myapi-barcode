using System;
using System.Net.Http;
using System.Net.Http.Json;
using System.Threading.Tasks;

class Program
{
    static async Task Main()
    {
        using var client = new HttpClient();
        client.DefaultRequestHeaders.Add("Authorization", "Bearer <API_KEY>");

        var payload = new {
            data = "DEC25-45PC",
            barcode_format = "code_128",
            output_format = "SVG",
            width = 200,
            height = 50,
            margin = 0
        };

        var res = await client.PostAsJsonAsync("https://api.myapi.rest/api/barcode/generate", payload);
        Console.WriteLine(await res.Content.ReadAsStringAsync());
    }
}
