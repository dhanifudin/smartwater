- Menambahkan data watermeter baru
  - POST /watermeters
  - 
    ```json
    {
      "device_id": "device-1",
      "value": 100,
      "taken_at": "2021-01-01T00:00:00"
    }
    ```

    ```x-www-form-urlencoded
    {
      "deviceId": "device-1",
      "imageFile": "file.jpg",
      "timestamp": "2021-01-01T00:00:00"
    }
    ```

