#include<stdio.h>
#include<sys/types.h>
#include<sys/socket.h>
#include<netinet/in.h>
#include<arpa/inet.h>
int main() {
	int sockfd,fd,len,i,p;
	char b[200];
	struct sockaddr_in sa,ca;

	sockfd=socket(AF_INET,SOCK_STREAM,0);
	sa.sin_family=AF_INET;
	sa.sin_addr.s_addr=INADDR_ANY;
	sa.sin_port=6001;

	len=sizeof(sa);
	i=bind(sockfd,(struct sockaddr *)&sa,len);
	printf("(%d%d)\n",sockfd,i);
	listen(sockfd,5);
	fd=accept(sockfd,(struct sockaddr *)&ca,&len);
	printf("[%d]\n",fd);
	recv(fd,&p,4,0);
	printf("client send %d\n",p);
	printf("\nGIVE STRIING TO SEND");
	scanf("%s", b);
	send(fd,b,50,0);

}
