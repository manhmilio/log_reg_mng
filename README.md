có thể hiểu đơn giản Model design repository pattern là một kỹ thuật lập trình nhằm quản lý dữ liệu một cách trực quan hơn, làm cho các phần mềm dễ thích nghi, bảo trì với những thay đổi trong cơ sở dữ liệu
nó được thiết kế là một mẫu phần mềm nằm trung gian giữa logic ứng dụng và lưu trữ dữ liệu
- mục đích của nó là cung cấp một cách có cấu trúc, tiêu chuẩn hóa để truy cập quản lý và và thao tác dữ liệu đồng thời trừu tượng hóa các chỉ tiết cơ bản của công nghệ lưu trữ dữ liệu
- thúc đẩy tách biệt rõ ràng các mối quan hệ, làm cho phần mềm dê bảo trì thích ứng với những thay đổi trong nguồn dữ liệu
Ưu điểm:
 - đơn giản hóa việc quản lý dữ liệu bằng cách tập trung logic truy cập dữ liệu, cho phép phần còn lại của ứng dụng truy cập dữ liệu thông qua giao diện một cách nhất quán
 - do việc tách quyền truy cập dữ liệu ra khỏi logic nên việc kiểm tra cũng trở nên đơn giản hơn, có thể dữ dàng mô phỏng kho lưu trữ cho phép kiểm tra các phần khác một cách độc lập
 - cách tách logic truy cập dữ liệu thiết kế mã trở nên sạch hơn và giúp sửa đổi hoặc truy cập dữ liệu đơn giản hơn mà không ảnh hưởng đến toàn bộ ứng dụng

Nhược điểm:
 - trong các dự án nhỏ, việc triển khai mẫu này có thể làm tăng độ phức tạp không cần thiết, khiến nó cồng kềnh hơn là hữu ích
 - việc áp dụng kho lưu trữ có thể đòi hỏi thời gian để thiết lập các giao diện của các lớp kho lưu trữ, khiến trì hoãn các mốc thời gian của dự án
 - đôi khi các chi tiết của quyền truy cập dự án
