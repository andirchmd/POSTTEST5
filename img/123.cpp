#include<iostream>
using namespace std;

struct mahasiswa{
    string nama;
    string nim;
    float ipk;
};

struct Node{
    mahasiswa data;
    Node *next;
};

void addLast(Node **head){
    Node *nodeBaru = new Node;
    cout<<"Masukkan Nama: ";
    fflush(stdin);getline(cin,nodeBaru->data.nama);
    cout<<"Masukkan NIM : ";
    cin>>nodeBaru->data.nim;
    cout<<"Masukkan IPK : ";
    cin>>nodeBaru->data.ipk;
    nodeBaru->next = NULL;
    if((*head) == NULL){
        *head = nodeBaru;
        return;
    }
    Node *temp = *head;
    while(temp->next != NULL){
        temp = temp->next;
    }
    temp->next = nodeBaru;
};

void display(Node **head){
    if(*head == NULL){
        cout<<"Linked List Kosong"<<endl;
        return;
    }
    Node *temp = *head;
    cout<<"Data Mahasiswa"<<endl;
    printf("\n");
    while (temp != NULL){
        cout<<"Nama: "<<temp->data.nama<<endl;
        cout<<"NIM: "<<temp->data.nim<<endl;
        cout<<"IPK: "<<temp->data.ipk<<endl;
        cout<<"============================"<<endl;
        temp = temp->next;
    }
}

void deleteLast(Node **head){
	if(*head == NULL){
        cout<<"Linked List Sudah Kosong"<<endl;
        return;
    }
    if((*head)->next == NULL){
		*head = NULL;
		cout<<"Linked List sudah dihapus"<<endl;
		return;
	}
    Node *temp = *head;
    while(temp->next->next !=  NULL){
    	temp = temp->next;
	}
	temp->next = NULL;
}

int main(){
    system("cls");
    Node *HEAD = NULL;
    int pilihan;
    while(pilihan != 9){
        cout<<"Program Linked List"<<endl;
        cout<<"1. Add Last"<<endl;
        cout<<"2. Display"<<endl;
        cout<<"3. Delete Last"<<endl;
        cout<<"9. Exit Program"<<endl;
        cout<<"Masukkan Pilihan: ";
        cin>>pilihan;
        printf("\n");
        switch(pilihan){
            case 1:
                addLast(&HEAD);
                printf("\n");
                break;
            case 2:
                display(&HEAD);
                printf("\n");
                break;
            case 3:
            	deleteLast(&HEAD);
            	printf("\n");
            	break;
            default:
                cout<<"Pilihan tidak ada"<<endl;
        }
    } return 0;
}
